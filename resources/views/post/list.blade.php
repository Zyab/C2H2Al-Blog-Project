@extends('home')
@section('main')

    @if(isset($totalPost))
        <h3 class="text-black-50">
            {{'Tìm thấy' . ' ' . $totalPost . ' '. 'bài viết ' . 'với từ khóa: '. $keyword. ' trên tổng số ' . $postTotal . ' bài viết của bạn'}}
        </h3>
    @endif
    <div class="row">
        @if(count($posts)=== 0)
            {{--            <p class="text-danger">Chưa có bài viết nào</p>--}}
        @else
            @foreach($posts as $key => $post)
                <div class="col-md-4" style="margin-bottom: 20px">
                    <div class="card">
                        <!-- Card image -->
                        @if($post->image == null)

                            <div class="card-body">
                                <a href="{{ route('post.show', $post->id) }} " style="color: black">
                                    <h4 class="card-title">{{ $post->title }}</h4></b>
                                </a>
                                <hr>
                                <!-- Text -->
                                <p class="card-text">{{ $post->description }}</p>
                                {!! $post->video_html !!}
                                <hr>
                                <p class="card-text">Created {{ $post->created_at }} by {{Auth::user()->name}}</p>

                            </div>
                        @else
                            <div class="card-body">
                                <div class="view overlay">
                                    <a href="{{ route('post.show', $post->id) }}">
                                        <img class="card-img-top"
                                             src="{{asset('storage/'.$post->image)}}"
                                             alt="Card image cap" style="width: 100%; height: 300px">
                                    </a>
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <a href="{{ route('post.show', $post->id) }} " style="color: black">
                                    <h4 class="card-title">{{ $post->title }}</h4></b>
                                </a>
                                <hr>
                                <!-- Text -->
                                <p class="card-text">{{ $post->description }}</p>
                                {!! $post->video_html !!}
                                <hr>
                                <p class="card-text">Created {{ $post->created_at }} by {{Auth::user()->name}}</p>

                            </div>
                        @endif


                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
