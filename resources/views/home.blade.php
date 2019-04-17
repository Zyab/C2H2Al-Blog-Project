{{--@extends('home-page.header2')--}}

{{--@section('content')--}}
@include('home-page.header2')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-10" style="margin-bottom: 20px">
                    @yield('main')

                </div>
                <div class="col-md-2" style="margin-bottom: 20px">
                    <div class="card testimonial-card">
                        <div class="card-up indigo lighten-1"></div>


                        <!-- Avatar -->
                        <div class="avatar mx-auto white">
                            <img src="{{asset('storage/'.Auth::user()->image)}}"
                                 class="rounded-circle" alt="woman avatar"
                                 style="height: 150px; width: 150px; margin-top: 20px">
                        </div>
                        <!-- Content -->
                        <div class="card-body">
                            <!-- Name -->
                            <h4 class="card-title">{{ Auth::user()->name }}</h4>
                            <hr>
                            <!-- Quotation -->
                            <a class="btn peach-gradient btn-lg" href="{{route('post.create')}}"
                               style="background: #009688; color: whitesmoke"> Thêm mới bài viết</a>
                            <hr>
                            <a class="btn peach-gradient btn-lg" href="{{route('post.list')}}"
                               style="background: #009688; color: whitesmoke"> Danh sách bài viết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--@endsection--}}


