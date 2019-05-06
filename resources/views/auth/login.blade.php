<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<div class="row justify-content-center">
    <div class="col-md-12">
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color" style="background:#192433">

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-333"
                    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active" style="margin-top: 5px">
                        <a class="nav-link" href="{{ url('/') }}"> <i class="fas fa-home"></i> Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item" style="margin-top: 5px">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
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
                        <li style="margin-top: 2px ; margin-right: 30px">
                            <form class="form-inline my-2 my-lg-0" action="{{route('post.search', Auth::user()->id)}}"
                                  method="get">
                                @csrf
                                <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search"
                                       aria-label="Search">
                                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </li>

                        <li class="nav-item dropdown">
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
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
            </div>
        </nav>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
            <div class="limiter">
                <div class="container-login100" style="background-image: url('{{asset('images/bg-01.jpg')}}');">
                    <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
					<span class="login100-form-title p-b-49">
						Login
					</span>

                            <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                <span class="label-input100">Email</span>
                                <input class="input100" type="email" name="email"  value="{{ old('email') }}" placeholder="Enter your email">
                                <p class="help text-danger">{{ $errors->first('email') }}</p>
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                <span class="label-input100">Password</span>
                                <input class="input100" type="password" name="password" placeholder="Enter Your Password">
                                <p class="help text-danger">{{ $errors->first('password') }}</p>
                                <span class="focus-input100" data-symbol="&#xf190;"></span>
                            </div>

                            <div class="text-right p-t-8 p-b-31">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                    <button class="login100-form-btn">
                                        Login
                                    </button>
                                </div>
                            </div>

                            <div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
                            </div>

                            <div class="flex-c-m">
                                <a href="#" class="login100-social-item bg1">
                                    <i class="fa fa-facebook"></i>
                                </a>

                                <a href="#" class="login100-social-item bg2">
                                    <i class="fa fa-twitter"></i>
                                </a>

                                <a href="#" class="login100-social-item bg3">
                                    <i class="fa fa-google"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
</body>
<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('js/main.js')}}"></script>
</html>



