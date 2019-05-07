@extends('home')
@section('main')

    @if(isset($totalPost))
        <h3 class="text-black-50">
            {{'Tìm thấy' . ' ' . $totalPost . ' '. 'bài viết ' . 'với từ khóa: '. $keyword. ' trên tổng số ' . $postTotal . ' bài viết của bạn'}}
        </h3>
    @endif

    <div class="row">
        @if(count($posts)=== 0)
                        <p class="text-danger">Chưa có bài viết nào</p>
        @else
            @foreach($posts as $key => $post)
                @if($post->image == null)
                    <div class="card bg-light mb-4 col-md-12" style="padding: 0px">
                        <div class="card-header">
                            <a href="{{ route('post.show', $post->id) }} " style="color: black">
                                <h4 class="card-title">{{ $post->title }}</h4>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{!! $post->content !!}</h4>
                            <p class="card-text">{{ $post->description }}</p>
                        </div>
                        <hr>
                        <div class="card-body">
                            <p class="card-text">Created {{ $post->created_at }} by {{Auth::user()->name}}</p>

                        </div>
                    </div>
                @else
                    <div class="card bg-light mb-4 col-md-12" style="padding: 0px">
                        <div class="row">

                        </div>
                        <div class="card-header">
                            <a href="{{ route('post.show', $post->id) }} " style="color: black">
                                <h4 class="card-title">{{ $post->title }}</h4>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{!! $post->content !!}</h4>
                            <p class="card-text">{{ $post->description }}</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                        <a href="{{ route('post.show', $post->id) }}">
                                            <img class="card-img-top" style="height: 358px; padding: 0px"
                                                 src="{{asset('storage/'.$post->image)}}"
                                                 alt="Card image cap">
                                        </a>

                                </div>
                                <div class="col-md-6">
                                    @if(isset($post->video))
                                        <div class="embed-responsive embed-responsive-16by9"
                                             style="width:100%; height: 358px; margin-right: 20px">
                                            {!! Embed::make($post->video)->parseUrl()->getIframe() !!}
                                        </div>
                                    @else
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <hr>
                            <p class="card-text">Created {{ $post->created_at }} by {{Auth::user()->name}}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif

    </div>
    {{ $posts->appends(request()->query()) }}
@endsection
