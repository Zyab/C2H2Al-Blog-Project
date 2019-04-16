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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $idUserLogin = Auth::user()->id;
        $posts = Post::where('user_id', '=', $idUserLogin )->get();
        return view('home', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('blog.show', compact('post'));
    }

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
