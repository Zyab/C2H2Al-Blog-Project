<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAll()
    {
        $users = User::all();
        return response()->json($users);
    }
    public function edit($id)
    {
        $user = User::find($id);
       return view('auth.edit',compact('user'));
    }


    public function show($id) {
        return User::findOrFail($id);
    }
    public function destroy($id) {
        if($id != null) {
            $user = User::findOrFail($id);
            $user->delete();
        }
    }
    public function store(Request $request) {
        dd($request->all());
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->email_verified_at = $request->input('email_verified_at');
        $user->dob = $request->input('dob');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->password = $request->input('password');
        $user->save();

        return response()->json($user);
    }
    public function update(Request $request, $id) {
//        dd($request);
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $user->image = $path;
        }
        $user->dob = $request->input('dob');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->save();
        return redirect()->route('home');
    }
}
