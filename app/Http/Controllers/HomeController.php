<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        $idUserLogin = Auth::user()->id;
        $posts = Post::where('user_id', '=', $idUserLogin )->get();
        return view('post.list', compact('posts'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function changePassword()
    {
//        $user = User::findOrFail($request->id);
        return view('auth.change-password');
    }
    public function updatePassword()
    {
        return redirect()->route('home');
    }
}
