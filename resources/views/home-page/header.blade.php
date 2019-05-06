
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
                                <a class="nav-link active" href="{{ url('/home') }}"> <h4> <strong>TRANG CÁ NHÂN</strong></h4></a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('login') }}"><h4><strong>LOGIN</strong></h4></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('register') }}"><h4><strong>REGISTER</strong></h4></a>
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
                        <h3 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>NƠI CẢM
                                XÚC CHỈ CÓ THỂ TỐT HƠN</strong></h3>
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
