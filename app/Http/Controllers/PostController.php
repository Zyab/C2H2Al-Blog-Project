<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create(){
        return view('blog.create');
    }

    public function getAllPost(){
        $user = User::all();
        $posts = Auth::user()->posts;
            return view('home', compact('posts','user'));

    }
}
