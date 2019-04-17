@extends('home')
@section('main')
                    <ul class="list-group">
                        <li class="list-group-item">{{ $post->title }}</li>
                        <li class="list-group-item">{{ $post->description }}</li>
                        <li class="list-group-item">{{ $post->content }}</li>
                        <li class="list-group-item">{{ $post->image }}</li>
                    </ul>

@endsection
