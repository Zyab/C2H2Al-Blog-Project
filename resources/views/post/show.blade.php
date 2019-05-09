<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>TITLE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- Stylesheets -->

    <link href="{{asset('common-css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('common-css/ionicons.css')}}" rel="stylesheet">


    <link href="{{asset('single-post-2/css/styles.css')}}" rel="stylesheet">

    <link href="{{asset('single-post-2/css/responsive.css')}}" rel="stylesheet">

</head>
<body>

<header>
    <div class="container-fluid position-relative no-side-padding">
        <ul class="main-menu visible-on-click" id="main-menu">
            <li><a href="{{ url('/') }} "><i class="fas fa-home"></i> Home</a></li>
            @guest
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                    </li>
                @endif
            @else
                <li class="dropdown">
                    @if(isset(Auth::user()->image))
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{asset('storage/'.Auth::user()->image)}}"
                                 style="width: 35px; height: 35px; border-radius: 50%" alt="mig0"> <span
                                    class="caret"></span>
                        </a>
                    @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{Auth::user()->name}}<span class="caret"></span>
                        </a>
                    @endif
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('password.change') }}">Change password</a>
                        <a class="dropdown-item" href="{{ route('user.edit', Auth::user()->id) }}">Edit
                            Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        <div class="src-area">
            <form class="form-inline my-2 my-lg-0" action="{{route('post.search', Auth::user()->id)}}"
                  method="get">
                @csrf
                <button class="src-btn" type="submit"><i class="fas fa-search"></i></button>
                <input class="src-input" name="keyword" type="search" placeholder="Search">
            </form>
        </div>

    </div><!-- conatiner -->
</header>

<div class="slider">

</div><!-- slider -->

<section class="post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-0"></div>
            <div class="col-lg-10 col-md-12">
                <div class="main-post">
                    <div class="post-top-area">
                        <h3 class="title"><b>Title: {{$post->title}}</b></h3>
                        <div class="post-info">
                            <div class="left-area">
                                <img src="{{asset('storage/'.Auth::user()->image)}}"
                                     alt="Profile Image">
                            </div>
                            <div class="middle-area">
                                <b>{{Auth::user()->name}}</b>
                            </div>
                        </div><!-- post-info -->
                        <h5 class="para">Description: {!! $post->description !!}</h5>
                    </div><!-- post-top-area -->
                    @if(isset($post->image))
                        <div class="post-image"><img src="{{asset('storage/'.$post->image)}}" alt="Blog Image"></div>
                    @else
                    @endif
                    <div class="post-bottom-area">

                        <p class="para">{!! $post->content !!}</p>
                        @if(isset($post->video))
                            <div class="embed-responsive embed-responsive-16by9"
                                 style="width:100%;height: 500px; margin:0px 50px 30px 0px;">
                                {!! Embed::make($post->video)->parseUrl()->getIframe() !!}
                            </div>
                        @else
                        @endif
                        <ul class="tags">
                            <li><a href="#">Mnual</a></li>
                            <li><a href="#">Liberty</a></li>
                            <li><a href="#">Recommendation</a></li>
                            <li><a href="#">Inspiration</a></li>
                        </ul>

                        <div class="post-icons-area">
                            <ul class="post-icons">
                                <li><a href="#"><i class="fas fa-heart"></i>57</a></li>
                                <li><a href="#"><i class="fas fa-comments"></i>6</a></li>
                                <li><a href="#"><i class="fas fa-eye"></i>138</a></li>
                            </ul>
                            <div class="post-icons-area">
                                <ul class="post-icons">
                                    <li>SHARE :</li>
                                    <div class="addthis_inline_share_toolbox"></div>
                                </ul>
                            </div>

                            <div class="post-footer post-info">

                                <div class="left-area">
                                    <a class="avatar" href="#"><img src="{{asset('storage/'.Auth::user()->image)}}"
                                                                    alt="Profile Image"></a>
                                </div>

                                <div class="middle-area">
                                    <a class="name" href="#"><b>{{Auth::user()->name}}</b></a>
                                    <p class="card-text">Created {{ $post->created_at }}</p>
                                </div>

                            </div><!-- post-info -->

                        </div><!-- post-bottom-area -->

                    </div><!-- main-post -->
                </div><!-- col-lg-8 col-md-12 -->
            </div><!-- row -->
        </div><!-- container -->
        <section class="comment-section center-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-0"></div>
                    <div class="col-lg-8 col-md-12">
                        <div class="comment-form">
                            <form role="form" method="post" action="{{route('comment.store', $post->id)}}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4><b>POST COMMENT</b></h4>
                                        <textarea name="body" rows="2"
                                                  class="text-area-messge form-control"
                                                  placeholder="Enter your comment"
                                                  aria-invalid="false"></textarea>
                                        <input type="hidden" name="post_id" value="{{ $post->id }}"/>
                                    </div><!-- col-sm-12 -->
                                    <div class="col-sm-12">
                                        <button class="submit-btn" type="submit" id="form-submit"><b>POST COMMENT</b>
                                        </button>
                                    </div><!-- col-sm-12 -->

                                </div><!-- row -->
                            </form>
                        </div><!-- comment-form -->

                        <h4><b>COMMENTS({{$commentsTotal}})</b></h4>
                        @foreach($post->comments as $comment)
                            <div class="commnets-area text-left">
                                <div iv class="comment">
                                    <div class="post-info">
                                        @if(isset($comment->user->image))
                                            <div class="left-area">
                                                <a class="avatar" href="#"><img
                                                            src="{{asset('storage/'.Auth::user()->image)}}"
                                                            alt="Profile Image"></a>
                                            </div>
                                        @else
                                        @endif
                                        <div class="middle-area">
                                            <a class="name" href="#"><b>{{Auth::user()->name}}</b></a>
                                            <p class="card-text">Created {{ $post->created_at }}</p>
                                        </div>
                                        <div class="right-area">
                                            <span class="submit-btn" id="show"><b>REPLY</b></span>
                                            <span></span>
                                            <span class="submit-btn" id="hide"><b>CANCEL</b></span>
                                        </div>
                                        <div class="right-area">


                                        </div>
                                    </div><!-- post-info -->
                                    <p>{{$comment->body}}</p>
                                    <hr>
                                    @foreach($comment->reply as $reply)
                                        <div class="comment">
                                            <h6 class="reply-for">Reply for <a
                                                        href="#"><b>{{$reply->user->name}}</b></a></h6>

                                            <div class="post-info">

                                                <div class="left-area">
                                                    <img src="{{asset('storage/'.Auth::user()->image)}}"
                                                         alt="Profile Image">
                                                </div>

                                                <div class="middle-area">
                                                    <a class="name" href="#"><b>{{$reply->user->name}}</b></a>
                                                    <p class="card-text">Created: {{ $reply->user->created_at }}</p>
                                                </div>


                                            </div><!-- post-info -->

                                            <p>{{$reply->body}}</p>

                                        </div>
                                    @endforeach
                                    <div class="comment-form" id="post-form" style="display: none">
                                        <form role="form" method="post"
                                              action="{{route('reply.replyComment',$comment->id)}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <textarea name="body" rows="2"
                                                              class="text-area-messge form-control"
                                                              placeholder="Enter your reply"
                                                              aria-invalid="false"></textarea>
                                                    <input type="hidden" name="post_id" value="{{$post->id}}"/>
                                                    <p class="help text-danger">{{ $errors->first('body') }}</p>
                                                </div><!-- col-sm-12 -->
                                                <div class="col-sm-12">
                                                    <button class="submit-btn" type="submit" id="form-submit">
                                                        <b>REPLY</b>
                                                    </button>

                                                </div><!-- col-sm-12 -->

                                            </div><!-- row -->
                                        </form>
                                    </div>
                                </div><!-- commnets-area -->
                            </div>
                        @endforeach
                        <script type="text/javascript"
                                src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cbfbf32c5d57a8d"></script>
                        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                                crossorigin="anonymous"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                                crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                                crossorigin="anonymous"></script>
                        <script src="{{asset('js/blog.js')}}"></script>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

</body>
</html>
