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
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->email_verified_at = $request->input('email_verified_at');
        $user->age = $request->input('age');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->password = $request->input('password');
        $user->save();

        return response()->json($user);
    }
    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->email_verified_at = $request->input('email_verified_at');
        $user->password = $request->input('password');
        $user->age = $request->input('age');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->save();
        return response() ->json($user);
    }
}
