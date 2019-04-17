@extends('home')
@section('content')
                        <div class="row">
                            @if(count($posts)=== 0)
                                <p class="text-danger">Chưa có bài viết nào</p>
                            @else
                                @foreach($posts as $key => $post)
                                    <div class="col-md-6">
                                        <div class="card">
                                            <!-- Card image -->
                                            <div class="view overlay">
                                                <img class="card-img-top"
                                                     src="{{$post->image}}"
                                                     alt="Card image cap">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body">

                                                <!-- Social shares button -->
                                                <a class="activator waves-effect waves-light mr-4"><i
                                                            class="fas fa-share-alt"></i></a>
                                                <!-- Title -->
                                                <h4 class="card-title">{{ $post->title }}</h4>
                                                <hr>
                                                <!-- Text -->
                                                <p class="card-text">{{ $post->description }}</p>
                                                <!-- Link -->
                                                <a href="{{ route('post.show', $post->id) }}"
                                                   class="black-text d-flex justify-content-end"><h5>Read more
                                                        <i class="fas fa-angle-double-right"></i></h5></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
@endsection
