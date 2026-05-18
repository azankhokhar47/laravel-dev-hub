<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('file-upload', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|mimes:png,jpg,jpeg|max:3000'
        ]);

        $path = $request->file('photo')->store('image', 'public');

        User::create([
            'file_name' => $path,
        ]);

        return redirect()->route('user.index')
            ->with('status', 'User Image Upload Successfully.');
    }

    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('file-upload', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        if ($request->hasFile('photo')) {

            if ($user->file_name && Storage::disk('public')->exists($user->file_name)) {
                Storage::disk('public')->delete($user->file_name);
            }

            $path = $request->file('photo')->store('image', 'public');

            $user->file_name = $path;
            $user->save();
        }

        return redirect()->route('user.index')
            ->with('status', 'User Image Updated Successfully.');
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        if ($user->file_name && Storage::disk('public')->exists($user->file_name)) {
            Storage::disk('public')->delete($user->file_name);
        }

        $user->delete();

        return redirect()->route('user.index')
            ->with('status', 'User Deleted Successfully.');
    }
}