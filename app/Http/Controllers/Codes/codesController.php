<?php

namespace App\Http\Controllers\Codes;

use App\Http\Controllers\Controller;
use App\Models\codes\Codes;
use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class codesController extends Controller
{
    //get add code
    public function index()
    {

        return view('admin-board.codes.addCode');
    }

    // add codes
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'code' => 'required|min:6|max:10|string'
        ]);


        $codes = Codes::all();
        foreach ($codes as $data) {
            if ($data->code == $request->code) {
                $notify = notify()->error('Code : ' . " " . $request->code . "  " . 'Allready Exist !');
                return view('admin-board.codes.addCode', compact('notify'));
            }
        }

        $codes = new Codes();
        $codes->name = $request->name;
        $codes->code = $request->code;
        $codes->save();
        $notify = notify()->success('Generate Code : ' . " " . $codes->code . " " . ' Successfully');
        return view('admin-board.codes.addCode', compact('notify'));
    }

    // get all codes
    public function getAllCodes()
    {
        $codes = Codes::all();
        return view('admin-board.codes.allCodes', compact('codes'));
    }

    // get edit codes
    public function getEditCodes($id)
    {

        $codes = Codes::find($id);
        return view('admin-board.codes.editCodes', compact('codes'));
    }

    public function editCodes(Request $request, $id)
    {

        $request->validate([
            'name' => 'string|required',
            'code' => 'string|required|min:6|max:10'
        ]);

        $codes = Codes::find($id);
        $codes->name = $request->name;
        $codes->code = $request->code;
        $codes->save();
        return redirect()->back();
        notify()->success('Edit Code : ' . ' ' . $codes->code . ' ' . 'Success');
    }

    // delete codes
    public function destroy($id)
    {
        $codes = Codes::find($id);
        $codes->delete();
        notify()->success('Deleted Code : ' . ' ' . $codes->code . ' ' . 'Success');
        return redirect()->back();
    }
}
