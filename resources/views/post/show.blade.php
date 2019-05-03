@extends('home')
@section('main')

    <div class="container" style="background: whitesmoke">
        <div class="col-md-12">
            <h3>{{$post->title}}</h3>
            <hr>
            <br>
            @if(isset($post->image))
                <img class="card-img-top"
                     src="{{asset('storage/'.$post->image)}}"
                     alt="Card image cap">
            @else
            @endif
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
        <hr>
    </div>


    <div class="container">

        <div class="col-md-10">
            <div class="comment">
                <h5>Comment</h5>
                <form role="form" method="post" action="{{route('comment.store', $post->id)}}">
                    @csrf
                    <div>
                        <div class="media-content">
                            <div class="form-group">
                                <input type="text" class="form-control" name="body">
                                <input type="hidden" name="post_id" value="{{ $post->id }}"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Comment</button>
                        </div>
                    </div>
                </form>
                <hr>
                @foreach($post->comments as $comment)
                    <article class="media">
                        <figure class="media-left" style="margin-right: 20px">
                            @if(isset($comment->user->image))
                            <p class="image">
                                <img src="{{asset('storage/'.$comment->user->image)}}"
                                     style="width: 50px; height: 50px; border-radius: 4px" alt="mig0">
                            </p>
                            @else
                            @endif
                        </figure>
                        <div class="card" style="width: 100%;margin-bottom: 20px">
                            <div class="card-header">
                                <strong>{{$comment->user->name}}</strong>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"> {{$comment->body}}</li>

                            </ul>
                        </div>

                    </article>


                    <div class="col-md-11 offset-1" style="margin-bottom: 20px">
                        @foreach($comment->reply as $reply)
                            <article class="media">
                                <figure class="media-left" style="margin-right: 20px">
                                    @if(isset($reply->user->image))
                                        <p class="image">
                                            <img src="{{asset('storage/'.$reply->user->image)}}"
                                                 style="width: 50px; height: 50px; border-radius: 4px" alt="mig0">
                                        </p>
                                    @else
                                    @endif
                                </figure>
                                <div class="card" style="width: 100%;margin-bottom: 20px">
                                    <div class="card-header">
                                        <strong>{{$reply->user->name}}</strong>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"> {{$reply->body}}</li>
                                    </ul>
                                </div>
                            </article>
                        @endforeach
                        <div class="col-md-11 offset-1">
                            <h5>Reply</h5>
                            <form role="form" method="post" action="{{route('reply.replyComment',$comment->id)}}">
                                @csrf
                                <input type="hidden" name="post_id" value="{{$post->id}}"/>
                                <div>
                                    <div class="media-content">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="body">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Reply</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>



@endsection
