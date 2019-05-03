@extends('home')
@section('main')

    <div class="container" style="background: whitesmoke">
        <div class="col-md-12">
            <h3>{{$post->title}}</h3>
            <hr>
            <br>
            <img class="card-img-top"
                 src="{{asset('storage/'.$post->image)}}"
                 alt="Card image cap">
            <br>
            <p>{!! $post->content !!}</p>
            @if(isset($post->video))
                <div class="embed-responsive embed-responsive-16by9"
                     style="width:100%;height: 500px; margin:0px 50px 30px 0px;">
                    {!! Embed::make($post->video)->parseUrl()->getIframe() !!}
                </div>
            @else
            @endif
        </div>

        <div class="addthis_inline_share_toolbox"></div>
        <a class="btn btn-primary" href="{{route('export-pdf',$post->id)}}">EXPORT PDF</a>
    </div>
    <hr>

    <div class="comment">
        <h4>Viết bình luận...<span class="glyphicon glyphicon-pencil"></span></h4>
        <form role="form" method="post" action="{{route('comment.store', $post->id)}}">
            @csrf
            <div>
                <div class="media-content">
                    <div class="form-group">
                        <textarea class="form-control" name="body"></textarea>
                        <input type="hidden" name="post_id" value="{{ $post->id }}"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Gui</button>
                </div>
            </div>
        </form>
        <hr>
        @foreach($post->comments as $comment)
            <article class="media">
                <figure class="media-left">
                    <p class="image">
                        <img src="{{asset('storage/'.$comment->user->image)}}"
                             style="width: 50px; height: 50px; border-radius: 50%" alt="mig0">
                    </p>
                </figure>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>{{$comment->user->name}}</strong>
                            <br>
                            {{$comment->body}}
                            <br>
                        </p>
                    </div>

                </div>
            </article>


            <div class="col-md-11 offset-1">
                @foreach($comment->reply as $reply)
                    <article class="media">
                        <figure class="media-left">
                            <p class="image">
                                <img src="{{asset('storage/'.$reply->user->image)}}"
                                     style="width: 50px; height: 50px; border-radius: 50%" alt="mig0">
                            </p>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>{{$reply->user->name}}</strong>
                                    <br>
                                    {{$reply->body}}
                                    <br>
                                </p>
                            </div>

                        </div>
                    </article>
                @endforeach
                <h4>Viết phan hoi...<span class="glyphicon glyphicon-pencil"></span></h4>
                <form role="form" method="post" action="{{route('reply.replyComment',$comment->id)}}">
                    @csrf
                    <div>
                        <div class="media-content">
                            <div class="form-group">
                                <textarea class="form-control" name="body"></textarea>
                                <input type="hidden" name="post_id" value="{{$comment->id }}"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Gui</button>
                        </div>
                    </div>
                </form>
            </div>
        @endforeach

    </div>


@endsection
