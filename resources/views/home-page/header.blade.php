<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color" style="background:#009688">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">

                <a class="nav-link" href="#"> <i class="fas fa-home"></i> Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Dropdown
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">
                    <i class="fab fa-google-plus-g"></i>
                </a>
            </li>
            @if (Route::has('login'))
                @auth
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/home') }}">TRANG CÁ NHÂN</a>
            </li>
                @else
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('login') }}">LOGIN</a>
            </li>
                    @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('register') }}">REGISTER</a>
            </li>
                    @endif
                @endauth
            @endif
{{--            <div class="flex-center position-ref full-height">--}}
{{--                @if (Route::has('login'))--}}
{{--                        @auth--}}
{{--                            <a href="{{ url('/home') }}">Home</a>--}}
{{--                        @else--}}
{{--                            <a href="{{ route('login') }}">Login</a>--}}

{{--                            @if (Route::has('register'))--}}
{{--                                <a href="{{ route('register') }}">Register</a>--}}
{{--                            @endif--}}
{{--                        @endauth--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            </div>--}}
        </ul>
    </div>
</nav>
<!--/.Navbar -->
