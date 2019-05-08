<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AlbumController extends Controller
{
    public function create()
    {
        return view('Album.create');
    }

    public function store(Request $request)

    {
        $this->validate($request, [

            'images' => 'required',
            'name' => 'required',
            'title' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

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
        $album->save();
        Session::flash('success','Tạo album thành công');
        return redirect()->route('album.list', compact('album'));
    }
    public function list()
    {
        $album = Auth::user()->album;

        return view('Album.list', compact('album'));
    }
    public function showDetail($id){
        $album = Album::findOrFail($id);
        return view('Album.detail',compact('album'));
    }
    public function delete($id)
    {
        $album = Album::findOrFail($id);

        $album->delete();
        Session::flash('success','xóa album thành công');
        return redirect()->route('album.list');
    }
}
