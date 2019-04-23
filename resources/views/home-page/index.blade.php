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
    {{--    <link rel="stylesheet" href="{{asset('css/hieu.css')}}">--}}
</head>
<body>
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
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
    <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/img%20%2848%29.jpg'); height: 600px;
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
                        <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>NƠI CẢM XÚC CHỈ CÓ THỂ TỐT HƠN</strong></h5>
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
<div class="row justify-content-center">
    <div class="col-md-10 justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-10 justify-content-center">
                <div class="row justify-content-center">
                    <!-- Card -->
                    <div class="card card-cascade wider reverse">
                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="https://colorlib.com/activello/wp-content/uploads/sites/10/2015/11/photo-1429734160945-4f85244d6a5a-1170x550.jpg"
                                 alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <!-- Title -->
                            <h4 class="card-title"><strong>My adventure</strong></h4>
                            <!-- Subtitle -->
                            <h6 class="font-weight-bold indigo-text py-2">Photography</h6>
                            <!-- Text -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Exercitationem perspiciatis voluptatum a, quo nobis, non commodi quia repellendus sequi
                                nulla voluptatem dicta reprehenderit, placeat laborum ut beatae ullam suscipit veniam.
                            </p>
                            <!-- Linkedin -->
                            <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
                            <!-- Twitter -->
                            <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
                            <!-- Dribbble -->
                            <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-2" style="margin-bottom: 20px">
                <!-- Card Light -->
                <div class="card">
                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top"
                             src="https://colorlib.com/activello/wp-content/uploads/sites/10/2015/11/photo-1438109491414-7198515b166b1.jpg"
                             alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">
                        <!-- Social shares button -->
                        <!-- Title -->
                        <h4 class="card-title" style="text-align: center">About me</h4>
                        <hr>
                        <!-- Text -->
                        <p class="card-text">My name is Activello and I am an awesome WordPress blog theme for
                            photography, food, travel and other blogs. I was created by colorlib..</p>
                        <!-- Link -->
                        <hr>
                        <h4 class="widget-title" style="text-align: center">Follow Me</h4>
                        <!-- social icons -->
                        <p style="text-align: center">
                            <a href="https://www.facebook.com/colorlib"
                               style="color: black; font-size: 20px; letter-spacing: 5px"><i
                                        class="fab fa-facebook-f"></i></a>
                            <a href="https://www.facebook.com/colorlib"
                               style="color: black; font-size: 20px; letter-spacing: 5px"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/colorlib"
                               style="color: black;font-size: 20px; letter-spacing: 5px"><i
                                        class="fab fa-google-plus-g"></i></a>
                            <a href="https://www.facebook.com/colorlib"
                               style="color: black;font-size: 20px; letter-spacing: 5px"><i
                                        class="fab fa-instagram"></i></a>

                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

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
</html>
