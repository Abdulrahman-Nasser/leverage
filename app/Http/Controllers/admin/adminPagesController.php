<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class adminPagesController extends Controller
{
    //get settigns page
    public function getSettigns()
    {
        return view('admin-board.settings');
    }

    // get all users
    public function getAllUsers()
    {
        $users = User::all();
        return view('admin-board.users', compact('users'));
    }

    // get Add users page
    public function getAddUser()
    {
        return view('admin-board.addUser');
    }

    // add new user
    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:20|string',
            'email' => 'required|email|string',
            'password' => 'required|min:8|max:30'
        ]);



        $users = User::all();

        foreach ($users as $data) {
            if ($data->email == $request->email) {
                return redirect()->back()->with('error', 'This Email has alraedy Token');
            }
        }
        
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->save();
        return redirect()->back()->with('Done', 'Add New User Success');
    }


    //---------------------- edit user ------------------
    public function getEditUser($id)
    {
        $users = User::find($id);
        return view('admin-board.editUser', compact('users'));
    }

    public function editUser(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();
        return redirect()->back()->with("Done", 'Update User Success');
    }

    // ------------------ Delete user -------------------
    public function destroyUser($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->back()->with('Done', 'Delete User Success');
    }
}
