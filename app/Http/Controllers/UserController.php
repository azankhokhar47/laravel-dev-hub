<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        $users = User::simplePaginate(10);
                 return view("home", compact('users'));
    }
    public function create()
    {
        return view("adduser");
    }

    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'useremail'=>'required|email',
            'usersalary'=>'required|numeric',
            'userdob'=>'required',
            'userpass'=>'required',
        ]);

        $user = User::create([
            'username'=> $request->username,
            'email'=> $request->useremail,
            'salary'=> $request->usersalary,
            'dob'=> $request->userdob,
            'password'=> $request->userpass,
            
        ]);

        return redirect()->route('user.index')
            ->with('status', 'New User Add Successfully.');
    }

    public function show(string $id)
    {
        $users = User::find($id);
        return view("viewuser", compact('users'));
    }
    
    
    public function edit(User $user)
    {
        $users = User::find($user->id);
        return view("updateuser", compact('users'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'username'=>'required',
            'useremail'=>'required|email',
            'usersalary'=>'required|numeric',
            'userdob'=>'required',
            'userpass'=>'required',
        ]);

        $user = User::where('id',$id)->update([
            'username'=> $request->username,
            'email'=> $request->useremail,
            'salary'=> $request->usersalary,
            'dob'=> $request->userdob,
            'password'=> $request->userpass,
            
        ]);

        return redirect()->route('user.index')
            ->with('status', 'Updated User Successfully.');
    }

    public function destroy(string $id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect()->route('user.index')
            ->with('status', 'User Deleted Successfully.');
    }
}