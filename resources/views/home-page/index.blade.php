<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/hieu.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


    <!-- Stylesheets -->

    <link href="{{asset('common-css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('common-css/ionicons.css')}}" rel="stylesheet">


    <link href="{{asset('layout-1/css/styles.css')}}" rel="stylesheet">

    <link href="{{asset('layout-1/css/responsive.css')}}" rel="stylesheet">
</head>
<body>
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar hieu">
        <div class="container">

            <a class="navbar-brand" href="#"><strong> <i class="fas fa-home"></i> HOME</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                    aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons">
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
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    <!-- Full Page Intro -->
    <div class="view" style="background-image: url('http://cdn.jevelin.shufflehound.com/blog1/wp-content/uploads/sites/11/2016/11/Title_2.jpg'); height: 600px;
     background-repeat: no-repeat; background-size: cover; background-position: center center; color: white; padding-top: 200px; margin-bottom: 20px">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light align-items-center">
            <!-- Content -->
            <div class="container">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12 mb-4 white-text text-center">
                        <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown"
                            data-wow-delay="0.3s"><strong>BLOG XỊN</strong></h1>
                        <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                        <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>NƠI CẢM
                                XÚC CHỈ CÓ THỂ TỐT HƠN</strong></h5>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->
</header>

<section class="blog-area section">
    <div class="col-sm-10 offset-1">

        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="single-post post-style-1">

                        <div class="blog-image"><img src="{{asset('images/marion-michele-330691.jpg')}}"
                                                     alt="Blog Image"></div>

                        <a class="avatar" href="#"><img src="{{asset('images/icons8-team-355979.jpg')}}"
                                                        alt="Profile Image"></a>

                        <div class="blog-info">

                            <h4 class="title"><a href="#"><b>Cafe Sang?</b></a></h4>

                            <ul class="post-footer">
                                <li><a href="#"><i class="fas fa-heart"></i>57</a></li>
                                <li><a href="#"><i class="fas fa-comments"></i>6</a></li>
                                <li><a href="#"><i class="fas fa-eye"></i>138</a></li>
                            </ul>

                        </div><!-- blog-info -->
                    </div><!-- single-post -->
                </div><!-- card -->
            </div><!-- col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="single-post post-style-1">

                        <div class="blog-image"><img src="{{asset('images/audrey-jackson-260657.jpg')}}"
                                                     alt="Blog Image"></div>

                        <a class="avatar" href="#"><img src="{{asset('images/icons8-team-355979.jpg')}}"
                                                        alt="Profile Image"></a>

                        <div class="blog-info">
                            <h4 class="title"><a href="#"><b>Africa</b></a></h4>

                            <ul class="post-footer">
                                <li><a href="#"><i class="fas fa-heart"></i>57</a></li>
                                <li><a href="#"><i class="fas fa-comments"></i>6</a></li>
                                <li><a href="#"><i class="fas fa-eye"></i>138</a></li>
                            </ul>
                        </div><!-- blog-info -->

                    </div><!-- single-post -->

                </div><!-- card -->
            </div><!-- col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="single-post post-style-1">

                        <div class="blog-image"><img src="{{asset('images/pexels-photo-370474.jpeg')}}"
                                                     alt="Blog Image"></div>

                        <a class="avatar" href="#"><img src="{{asset('')}}images/averie-woodard-319832.jpg"
                                                        alt="Profile Image"></a>

                        <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most
                                    Complex
                                    Concepts in Physics?</b></a></h4>

                        <ul class="post-footer">
                            <li><a href="#"><i class="fas fa-heart"></i>57</a></li>
                            <li><a href="#"><i class="fas fa-comments"></i>6</a></li>
                            <li><a href="#"><i class="fas fa-eye"></i>138</a></li>
                        </ul>

                    </div><!-- single-post -->
                </div><!-- card -->
            </div><!-- col-lg-4 col-md-6 -->

            <div class="col-lg-8 col-md-12">
                <div class="card h-100">
                    <div class="single-post post-style-2">

                        <div class="blog-image"><img src="{{asset('images/brooke-lark-194251.jpg')}}" alt="Blog Image">
                        </div>

                        <div class="blog-info">

                            <h6 class="pre-title"><a href="#"><b>HEALTH</b></a></h6>

                            <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most
                                        Complex
                                        Concepts in Physics?</b></a></h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                            <div class="avatar-area">
                                <a class="avatar" href="#"><img src="{{asset('images/icons8-team-355979.jpg')}}"
                                                                alt="Profile Image"></a>
                                <div class="right-area">
                                    <a class="name" href="#"><b>Lora Plamer</b></a>
                                    <h6 class="date" href="#">on Sep 29, 2017 at 9:48am</h6>
                                </div>
                            </div>

                            <ul class="post-footer">
                                <li><a href="#"><i class="fas fa-heart"></i>57</a></li>
                                <li><a href="#"><i class="fas fa-comments"></i>6</a></li>
                                <li><a href="#"><i class="fas fa-eye"></i>138</a></li>
                            </ul>

                        </div><!-- blog-right -->

                    </div><!-- single-post extra-blog -->

                </div><!-- card -->
            </div><!-- col-lg-8 col-md-12 -->

            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="single-post post-style-1">

                        <div class="blog-image"><img src="{{asset('images/dmitri-popov-326976.jpg')}}" alt="Blog Image">
                        </div>

                        <a class="avatar" href="#"><img src="{{asset('images/averie-woodard-319832.jpg')}}"
                                                        alt="Profile Image"></a>

                        <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most
                                    Complex
                                    Concepts in Physics?</b></a></h4>

                        <ul class="post-footer">
                            <li><a href="#"><i class="fas fa-heart"></i>57</a></li>
                            <li><a href="#"><i class="fas fa-comments"></i>6</a></li>
                            <li><a href="#"><i class="fas fa-eye"></i>138</a></li>
                        </ul>

                    </div><!-- single-post -->
                </div><!-- card -->
            </div><!-- col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="card h-100">

                    <div class="single-post post-style-2 post-style-3">

                        <div class="blog-info">

                            <h6 class="pre-title"><a href="#"><b>HEALTH</b></a></h6>

                            <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most
                                        Complex
                                        Concepts in Physics?</b></a></h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                            <div class="avatar-area">
                                <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>
                                <div class="right-area">
                                    <a class="name" href="#"><b>Lora Plamer</b></a>
                                    <h6 class="date" href="#">on Sep 29, 2017 at 9:48am</h6>
                                </div>
                            </div>

                            <ul class="post-footer">
                                <li><a href="#"><i class="fas fa-heart"></i>57</a></li>
                                <li><a href="#"><i class="fas fa-comments"></i>6</a></li>
                                <li><a href="#"><i class="fas fa-eye"></i>138</a></li>
                            </ul>

                        </div><!-- blog-right -->

                    </div><!-- single-post extra-blog -->

                </div><!-- card -->
            </div><!-- col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="single-post post-style-1">

                        <div class="blog-image"><img src="images/ben-o-sullivan-382817.jpg" alt="Blog Image"></div>

                        <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>

                        <div class="blog-info">
                            <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most
                                        Complex
                                        Concepts in Physics?</b></a></h4>

                            <ul class="post-footer">
                                <li><a href="#"><i class="fas fa-heart"></i>57</a></li>
                                <li><a href="#"><i class="fas fa-comments"></i>6</a></li>
                                <li><a href="#"><i class="fas fa-eye"></i>138</a></li>
                            </ul>
                        </div><!-- blog-info -->

                    </div><!-- single-post -->

                </div><!-- card -->
            </div><!-- col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="card h-100">

                    <div class="single-post post-style-4">

                        <div class="display-table">
                            <h4 class="title display-table-cell"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict
                                        One of the Most Complex
                                        Concepts in Physics?</b></a></h4>
                        </div>

                        <ul class="post-footer">
                            <li><a href="#"><i class="fas fa-heart"></i>57</a></li>
                            <li><a href="#"><i class="fas fa-comments"></i>6</a></li>
                            <li><a href="#"><i class="fas fa-eye"></i>138</a></li>
                        </ul>

                    </div><!-- single-post -->

                    <div class="single-post">

                        <div class="display-table">
                            <h4 class="title display-table-cell"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict
                                        One of the Most Complex
                                        Concepts in Physics?</b></a></h4>
                        </div>

                        <ul class="post-footer">
                            <li><a href="#"><i class="fas fa-heart"></i>57</a></li>
                            <li><a href="#"><i class="fas fa-comments"></i>6</a></li>
                            <li><a href="#"><i class="fas fa-eye"></i>138</a></li>
                        </ul>

                    </div><!-- single-post -->

                </div><!-- card -->
            </div><!-- col-lg-4 col-md-6 -->


        </div><!-- row -->


    </div><!-- container -->
</section><!-- section -->

{{--<footer>--}}

{{--    <div class="container">--}}
{{--        <div class="row">--}}

{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="footer-section">--}}

{{--                    <a class="logo" href="#"><img src="{{asset('images/logo.png')}}" alt="Logo Image"></a>--}}
{{--                    <p class="copyright">© 2019 Copyright:</p>--}}
{{--                    <p class="copyright">Designed by C2H2AL Team</p>--}}
{{--                    <ul class="icons">--}}
{{--                        <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>--}}
{{--                        <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>--}}
{{--                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>--}}
{{--                        <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>--}}
{{--                        <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>--}}
{{--                    </ul>--}}

{{--                </div><!-- footer-section -->--}}
{{--            </div><!-- col-lg-4 col-md-6 -->--}}

{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="footer-section">--}}
{{--                    <h4 class="title"><b>CATAGORIES</b></h4>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">BEAUTY</a></li>--}}
{{--                        <li><a href="#">HEALTH</a></li>--}}
{{--                        <li><a href="#">MUSIC</a></li>--}}
{{--                    </ul>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">SPORT</a></li>--}}
{{--                        <li><a href="#">DESIGN</a></li>--}}
{{--                        <li><a href="#">TRAVEL</a></li>--}}
{{--                    </ul>--}}
{{--                </div><!-- footer-section -->--}}
{{--            </div><!-- col-lg-4 col-md-6 -->--}}

{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="footer-section">--}}

{{--                    <h4 class="title"><b>SUBSCRIBE</b></h4>--}}
{{--                    <div class="input-area">--}}
{{--                        <form>--}}
{{--                            <input class="email-input" type="text" placeholder="Enter your email">--}}
{{--                            <button class="submit-btn" type="submit"><i class="far fa-envelope"></i></button>--}}
{{--                        </form>--}}
{{--                    </div>--}}

{{--                </div><!-- footer-section -->--}}
{{--            </div><!-- col-lg-4 col-md-6 -->--}}

{{--        </div><!-- row -->--}}
{{--    </div><!-- container -->--}}
{{--</footer>--}}
</body>
<script src="{{asset('common-js/jquery-3.1.1.min.js')}}"></script>

<script src="{{asset('common-js/tether.min.js')}}"></script>

<script src="{{asset('common-js/bootstrap.js')}}"></script>

<script src="{{asset('common-js/scripts.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</html>
