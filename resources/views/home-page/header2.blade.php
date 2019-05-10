<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link href="{{asset('common-css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('common-css/ionicons.css')}}" rel="stylesheet">


    <link href="{{asset('single-post-2/css/styles.css')}}" rel="stylesheet">

    <link href="{{asset('single-post-2/css/responsive.css')}}" rel="stylesheet">
</head>

<body>
<div class="row justify-content-center">
    <div class="col-md-12">
        <header>
            <div class="container-fluid position-relative no-side-padding">
                <ul class="main-menu visible-on-click" id="main-menu">
                    <li><a href="{{ url('/') }} "><i class="fas fa-home"></i> HOME</a></li>
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
    </div>
</div>
<main class="py-4">
    @yield('content')
</main>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cbfbf32c5d57a8d"></script>
<script src="{{asset('js/blog.js')}}"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.js"></script>
</html>
<!--/.Navbar -->

