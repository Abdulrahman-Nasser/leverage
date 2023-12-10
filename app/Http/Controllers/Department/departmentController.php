<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\department\Department;
use Illuminate\Http\Request;

class departmentController extends Controller
{
    //get department page
    public function index(){
        return view('admin-board.departments.addDepartment');
    }

    // add new department
    public function addDepartment(Request $request){

        $request->validate([
            'name' => 'string|required'
        ]);

        $departments = new Department();
        $departments = Department::all();

        foreach($departments as $data){
            if($data->name == $request->name){
                return redirect()->back()->with('error' , 'this Department has been added before');
            }
        }
        $departments = new Department();
        $departments->name = $request->name;
        $departments->save();
        return redirect()->back()->with('Done' , 'Add Department Success');
    }

    // get all departments
    public function getAllDepartments(){
        $departments = new Department();
        $departments = Department::all();
        return view('admin-board.departments.allDepartments' , compact('departments'));
    }

    // edit department
    public function getEditDepartment($id){
        $departments = Department::find($id);
        return view('admin-board.departments.editDepartment' , compact('departments'));
    }

    public function editDepartment(Request $request , $id){
        $departments = Department::find($id);
        $departments->name = $request->name;
        $departments->save();
        return redirect()->back()->with('Done' , 'Edit Department Success');
    }

    // delete department
    public function destroyDepartment($id){
        $departments = Department::find($id);
        $departments->delete();
        return redirect()->back()->with('Done' , 'Delete Department Success');

    }
}
