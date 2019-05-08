@extends('home')
@section('main')
    <div class="card">
        <div class="card-header">
          <div class="row">
              <div class="col-md-6">
                  <h4 class="card-title" style="padding-top: 20px">Album number: {!! $album->id !!}</h4>
              </div>
              <div class="col-md-6">
                  <div class="dropdown"  style="text-align: right">
                      <a class="btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <h1 style="color:black">...</h1>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="text-align: left">
                          <a class="dropdown-item btn-outline-light" href="#">Edit Album</a>
                          <a class="dropdown-item btn-outline-light" href="{{route('album.delete',$album->id)}}" class="text-danger"
                             onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete Album</a>
                      </div>
                  </div>
              </div>

          </div>


        </div>
        <div class="card-body">
            <h4 class="card-title">Album name: {!! $album->name !!}</h4>
            <div class="row">
            @foreach(json_decode($album->images) as $image)

                 <div class="col-4">
                     <img src="{{asset('images/'.$image)}}" style="width: 100%; height: 250px">
                 </div>

            @endforeach
            </div>
        </div>
        <div class="card-body">
            <p class="card-text">Created {{ $album->created_at }} by {{Auth::user()->name}}</p>
        </div>
        <div class="addthis_inline_share_toolbox"></div>
    </div>
@endsection
