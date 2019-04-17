<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PhpOption\Tests\PhpOptionRepo;

class PostController extends Controller
{
    public function create(){
        return view('blog.create');
    }

//    public function getAllPost(){
//        $user = User::all();
//        $posts = Auth::user()->posts;
//            return view('home', compact('posts','user'));
//
//    }
    public function store(Request $request){
        $post = new Post();
        $post->title  = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = Auth::user()->id;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $post->image = $path;
        }
        $post->save();
        Session::flash('success', 'Tạo mới bài viết thành công');
        return redirect()->route('blog.create');

    }
}

