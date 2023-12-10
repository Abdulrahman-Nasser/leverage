<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use App\Http\Requests\Requests\adminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class adminController extends Controller
{
    use AuthenticatesUsers;

    public function index()
    {
        return view('admin-board.index');
    }

    // public function getLogin()
    // {
    //     return view('admin-board.admin-login');
    // }

    public function login()
    {
        return view('admin-board.login');
    }

    // public function createAdmin(Request $request){
    //     $admins = new Admin();
    //     $admins->name = "hani";
    //     $admins->email = 'hani15@gmail.com';
    //     $admins->password = bcrypt('123456789');
    //     $admins->save();

    // }




    public function login_admin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);


        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->back()->with(['error' => "Worng Email or Password"]);
        }
    }






}
