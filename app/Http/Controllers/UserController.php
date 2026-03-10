<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        // return $user;
        return view("home",compact('user')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adduser");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;


        // $user = new User;

        // $user->name = $request->username;
        // $user->email = $request->useremail;
        // $user->age = $request->userage;
        // $user->city = $request->usercity;

        // $user->save();

         $request->validate([
            'username' => 'required|string',
            'useremail' => 'required|email',
            'userage' => 'required|numeric',
            'usercity' => 'required|alpha',
        ]); 

        user::create([
        'name' => $request->username,
        'email' => $request->useremail,
        'age' =>  $request->userage,
        'city' =>  $request->usercity,
        ]);

        return redirect()->route('user.index')
                                            ->with('status','New User Added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::find($id);

         return view("viewuser", compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $Users = User::find($user->id);
         return view("updateuser", compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $user = User::find($id);

        // $user->name = $request->username;
        // $user->email = $request->useremail;
        // $user->age = $request->userage;
        // $user->city = $request->usercity;

        // $user->save();

        $request->validate([
            'username' => 'required|string',
            'useremail' => 'required|email',
            'userage' => 'required|numeric',
            'usercity' => 'required|alpha',
        ]);

        $user = User::where('id',$id)
                        ->where([
                            'name' => $request->username,
                            'email' => $request->useremail,
                            'age' =>  $request->userage,
                            'city' =>  $request->usercity,
                        ]);

        return redirect()->route('user.index')
                                            ->with('status','User Data Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        // User::destroy($id);

        // User::destroy(8,9);

        // User::truncate();

        return redirect()->route('user.index')
                                            ->with('status','User Data Deleted Successfully.');
    }
}

