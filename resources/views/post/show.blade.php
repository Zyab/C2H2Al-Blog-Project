@extends('home')
@section('main')
<div class="container" style="background: whitesmoke">
    <div class="col-md-12">
        <h3>{{$post->title}}</h3>
        <hr>
        <br>
        <img class="card-img-top"
             src="{{asset('storage/'.$post->image)}}"
             alt="Card image cap" >
        <br>
        <p>{!! $post->content !!}</p>
    </div>

</div>
@endsection
