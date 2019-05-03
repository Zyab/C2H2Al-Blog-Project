<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $comment = $user->comments;
        $comments = new Comment();
        $comments->body = $request->input('body');
        $comments->user_id = Auth::user()->id;
        $comments->post_id =  $id;
        $comments->save();
        return redirect()->route('post.show',$id);
    }

}
