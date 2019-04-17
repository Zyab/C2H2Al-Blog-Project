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
</head>
<body>

<div class="row justify-content-center">
    <div class="col-md-10">
        @include('home-page.header')
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 20px; margin-top: 10px">
                <!--Carousel Wrapper-->
                <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-2" data-slide-to="1"></li>
                        <li data-target="#carousel-example-2" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="view">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
                                     alt="First slide">
                                <div class="mask rgba-black-light"></div>
                            </div>
                            <div class="carousel-caption">
                                <h2 class="h3-responsive">Light mask</h2>
                                <p>First text</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
                                     alt="Second slide">
                                <div class="mask rgba-black-strong"></div>
                            </div>
                            <div class="carousel-caption">
                                <h3 class="h3-responsive">Strong mask</h3>
                                <p>Secondary text</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
                                     alt="Third slide">
                                <div class="mask rgba-black-slight"></div>
                            </div>
                            <div class="carousel-caption">
                                <h3 class="h3-responsive">Slight mask</h3>
                                <p>Third text</p>
                            </div>
                        </div>
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->
            </div>
            <div class="col-md-4" style="margin-bottom: 20px">
                <!-- Card Light -->
                <div class="card">
                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(115).jpg" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Social shares button -->
                        <a class="activator waves-effect waves-light mr-4"><i class="fas fa-share-alt"></i></a>
                        <!-- Title -->
                        <h4 class="card-title">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Link -->
                        <a href="#!" class="black-text d-flex justify-content-end"><h5>Read more <i class="fas fa-angle-double-right"></i></h5></a>

                    </div>

                </div>
                <!-- Card Light -->
            </div>
            <div class="col-md-4" style="margin-bottom: 20px">
                <!-- Card Light -->
                <div class="card">
                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(117).jpg" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Social shares button -->
                        <a class="activator waves-effect waves-light mr-4"><i class="fas fa-share-alt"></i></a>
                        <!-- Title -->
                        <h4 class="card-title">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Link -->
                        <a href="#!" class="black-text d-flex justify-content-end"><h5>Read more <i class="fas fa-angle-double-right"></i></h5></a>

                    </div>

                </div>
                <!-- Card Light -->
            </div>
            <div class="col-md-4" style="margin-bottom: 20px">
                <!-- Card Light -->
                <div class="card">
                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img(117).jpg" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Social shares button -->
                        <a class="activator waves-effect waves-light mr-4"><i class="fas fa-share-alt"></i></a>
                        <!-- Title -->
                        <h4 class="card-title">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Link -->
                        <a href="#!" class="black-text d-flex justify-content-end"><h5>Read more <i class="fas fa-angle-double-right"></i></h5></a>

                    </div>

                </div>
                <!-- Card Light -->
            </div>
        </div>
    </div>
</div>
@yield('content')
        <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="footer">
            @include('home-page.footer')
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
