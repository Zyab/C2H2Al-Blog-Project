<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function create()
    {
        return view('Album.create');
    }

    public function store(Request $request)

    {

        if($request->hasfile('images'))
        {

            foreach($request->file('images') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $data[] = $name;
            }
        }

        $album= new Album();
        $album->name = $request->name;
        $album->title = $request->title;
        $album->user_id = Auth::user()->id;
        $album->images=json_encode($data);
//
        $album->save();
//        dd($album->images);
        return redirect()->route('album.list', compact('album'));
    }
    public function list()
    {
        $album = Auth::user()->album;

        return view('album.list', compact('album'));

    }

}
