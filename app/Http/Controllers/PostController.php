<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function getAllPost()
    {

        $posts = Auth::user()->posts;
        return view('post.postsList', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('post.show', compact('post'));
    }

    public function search(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $keyword = $request->input('keyword');
        if (!$keyword) {

            return redirect()->route('post.list');

        }
        $post = $user->posts;
        $posts = Post::where('user_id', Auth::user()->id)
            ->where(function ($query) use ($keyword) {
                $query->where('title', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('description', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('content', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(5);
        $totalPost = count($posts);
        $postTotal = count($post);
        return view('post.list', compact('posts', 'totalPost', 'keyword', 'postTotal'));
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->comments()->delete();
        $post->reply()->delete();
        $post->delete();
        Session::flash('success', 'Xóa bài viết thành công');
        return redirect()->route('post.list');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'editor1' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'required|url',
        ]);
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('editor1');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $post->image = $path;
        }
        $post->video = $request->input('video');
        $post->description = $request->input('description');
        $post->user_id = Auth::user()->id;
        $post->save();
        Session::flash('success' . 'Tạo mới bài viết thành công');
        return redirect()->route('home');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {

        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->editor1;
        if ($request->hasFile('image')) {
//            unlink(public_path() . '/storage/' . $post->image);
            $avatar = $request->image;
            $path = $avatar->store('avatar', 'public');
            $post->image = $path;
        }
        $post->video = $request->input('video');
        $post->save();
        Session::flash('success', 'Cap nhat bai viet thanh cong');
        return redirect()->route('post.list');
    }
}
