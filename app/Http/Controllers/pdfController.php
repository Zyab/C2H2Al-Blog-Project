<?php

namespace App\Http\Controllers;

use App\Post;
use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Http\Request;

class pdfController extends Controller
{
    public function index($id)
    {
        $posts = Post::findOrFail($id);
        $pdf = PDF::loadView('post.test', compact('posts'));
        return $pdf->download('post.pdf');
    }
}
