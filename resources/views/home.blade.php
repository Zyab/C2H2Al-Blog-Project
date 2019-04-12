@extends('home-page.header2')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-10" style="margin-bottom: 20px">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <!-- Card image -->
                                    <div class="view overlay">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap">
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
                            </div>
                            <div class="col-md-6">
                                <!-- Card deck -->
                                <div class="card-deck">

                                    <!-- Card -->
                                    <div class="card ">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>

                                        <!--Card content-->
                                        <div class="card-body">

                                            <!--Title-->
                                            <h4 class="card-title">Card title</h4>
                                            <!--Text-->
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                            <button type="button" class="btn btn-light-blue btn-md">Read more</button>

                                        </div>

                                    </div>
                                    <!-- Card -->

                                    <!-- Card -->
{{--                                    <div class="card mb-4">--}}

{{--                                        <!--Card image-->--}}
{{--                                        <div class="view overlay">--}}
{{--                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" alt="Card image cap">--}}
{{--                                            <a href="#!">--}}
{{--                                                <div class="mask rgba-white-slight"></div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <!--Card content-->--}}
{{--                                        <div class="card-body">--}}

{{--                                            <!--Title-->--}}
{{--                                            <h4 class="card-title">Card title</h4>--}}
{{--                                            <!--Text-->--}}
{{--                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->--}}
{{--                                            <button type="button" class="btn btn-light-blue btn-md">Read more</button>--}}

{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                    <!-- Card -->--}}

{{--                                    <!-- Card -->--}}
{{--                                    <div class="card mb-4">--}}

{{--                                        <!--Card image-->--}}
{{--                                        <div class="view overlay">--}}
{{--                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg" alt="Card image cap">--}}
{{--                                            <a href="#!">--}}
{{--                                                <div class="mask rgba-white-slight"></div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <!--Card content-->--}}
{{--                                        <div class="card-body">--}}

{{--                                            <!--Title-->--}}
{{--                                            <h4 class="card-title">Card title</h4>--}}
{{--                                            <!--Text-->--}}
{{--                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->--}}
{{--                                            <button type="button" class="btn btn-light-blue btn-md">Read more</button>--}}

{{--                                        </div>--}}

{{--                                    </div>--}}
                                    <!-- Card -->

                                </div>
                                <!-- Card deck -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-2" style="margin-bottom: 20px">
                    <div class="card testimonial-card">
                        <div class="card-up indigo lighten-1"></div>

                        <!-- Avatar -->
                        <div class="avatar mx-auto white">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle" alt="woman avatar" style="height: 150px; width: 150px; margin-top: 20px">
                        </div>

                        <!-- Content -->
                        <div class="card-body">
                            <!-- Name -->
                            <h4 class="card-title">LAN ANH</h4>
                            <hr>
                            <!-- Quotation -->
                            <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
                        </div>

                    </div>
                    <!-- Card -->
                    <!-- Card Light -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
