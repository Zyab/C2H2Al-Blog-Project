<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-light bg-white absolute-top">
        <div class="container">

            <button class="navbar-toggler order-2 order-md-1" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3 order-md-2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Create Blog<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Posts</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown02">
                            <a class="dropdown-item" href="#">Image</a>
                            <a class="dropdown-item" href="#">Video</a>
                            <a class="dropdown-item" href="#">Audio</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse order-4 order-md-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                </ul>
                <form class="form-inline" role="search">
                    <input class="search js-search form-control form-control-rounded mr-sm-2" type="text"
                           title="Enter search query here.." placeholder="Search.." aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
    <hr>
</div>
<div class="container">
    <div class="main">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('storage/image/5.jpg')}} "class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('storage/image/18.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('storage/image/jump.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('storage/image/slide2.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('storage/image/10.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <aside class="sidebar sidebar-sticky">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title">Tags</h4>
                            <a class="btn btn-light btn-sm mb-1" href="#">Journey</a>
                            <a class="btn btn-light btn-sm mb-1" href="#">Work</a>
                            <a class="btn btn-light btn-sm mb-1" href="#">Lifestype</a>
                            <a class="btn btn-light btn-sm mb-1" href="#">Photography</a>
                            <a class="btn btn-light btn-sm mb-1" href="#">Food &amp; Drinks</a>
                        </div>
                    </div>
                    <!-- /.card -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title">Popular stories</h4>
                            <a href="#" class="d-inline-block">
                                <h4 class="h6">The blind man</h4>
                                <img class="card-img" src="{{asset('storage/image/blindman.jpg')}}" alt="">
                            </a>
                            <time class="timeago" datetime="2017-10-03 20:00" data-tid="7">1 year ago</time>
                            in Lifestyle

                            <a href="#" class="d-inline-block mt-3">
                                <h4 class="h6">Crying on the news</h4>
                                <img class="card-img" src="{{asset('storage/image/slide3.jpg')}}" alt="">
                            </a>
                            <time class="timeago" datetime="2017-07-16 20:00" data-tid="8">1 year ago</time>
                            in Work

                        </div>
                    </div><!-- /.card -->
                </aside>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background: black">
    <div class="container">
        <div class="footer">
            <div class="row">
                <div class="col-md-12" style="margin-top:40px">

                </div>
            </div>
        </div>
    </div>
</div>
{{--<div class="container-fluid " style="background: black">--}}
{{--    <div class="container">--}}
{{--        <div class="footer">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12" style="margin-top: 40px">--}}
{{--                    <div class="col-12 social padding">--}}
{{--                        <h4>Follow Us:</h4>--}}
{{--                        <img src="{{asset('storage/image/logo2.png')}}">--}}
{{--                        <a href="#"><i class="fab fa-facebook"></i></a>--}}
{{--                        <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                        <a href="#"><i class="fab fa-google-plus-g"></i></a>--}}
{{--                        <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                        <a href="#"><i class="fab fa-youtube"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-12">--}}
{{--                    <!--<ul class="nav justify-content-center">-->--}}

{{--                    <!--<li class="nav-item">-->--}}
{{--                    <!--<a class="nav-link" href="#">Privacy policy</a>-->--}}
{{--                    <!--</li>-->--}}
{{--                    <!--<li class="nav-item">-->--}}
{{--                    <!--<a class="nav-link" href="#">Terms</a>-->--}}
{{--                    <!--</li>-->--}}
{{--                    <!--<li class="nav-item">-->--}}
{{--                    <!--<a class="nav-link" href="#">Feedback</a>-->--}}
{{--                    <!--</li>-->--}}
{{--                    <!--<li class="nav-item">-->--}}
{{--                    <!--<a class="nav-link" href="#">Advertise</a>-->--}}
{{--                    <!--</li>-->--}}
{{--                    <!--<li class="nav-item">-->--}}
{{--                    <!--<a class="nav-link" href="page-contact.html">Contact</a>-->--}}
{{--                    <!--</li>-->--}}
{{--                    <!--</ul>-->--}}
{{--                    <h4>© C2H2AL Team 2019--}}
{{--                        All rights reserved</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
