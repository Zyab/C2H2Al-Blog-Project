@extends('home')
@section('main')
    {{--    @foreach($album as $key => $item)--}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Album number: {!! $album->id !!}</h4>

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
    </div>

    {{--        @foreach(json_decode($item->images) as $image)--}}
    {{--            <img src="{{asset('images/'.$image)}}">--}}

    {{--        @endforeach--}}

    {{--    @endforeach--}}
    {{--    <div class="card-header">--}}
    {{--            <h4 class="card-title">Album number: {!! $item->id !!}</h4>--}}
    {{--    </div>--}}


@endsection
