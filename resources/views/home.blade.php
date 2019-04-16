@extends('home-page.header2')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-10" style="margin-bottom: 20px">
                    <div class="col-md-12">
                        <div class="row">
                            @if(count($posts)=== 0)
                                <p class="text-danger">Chưa có bài viết nào</p>
                            @else
                                @foreach($posts as $key => $post)
                                    <div class="col-md-6">

                                        <div class="card">
                                            <!-- Card image -->
                                            <div class="view overlay">
                                                <img class="card-img-top"
                                                     src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg"
                                                     alt="Card image cap">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body">

                                                <!-- Social shares button -->
                                                <a class="activator waves-effect waves-light mr-4"><i
                                                            class="fas fa-share-alt"></i></a>
                                                <!-- Title -->
                                                <h4 class="card-title">{{ $post->title }}</h4>
                                                <hr>
                                                <!-- Text -->
                                                <p class="card-text">{{ $post->description }}</p>
                                                <!-- Link -->
                                                <a href="{{ route('post.show', $post->id) }}" class="black-text d-flex justify-content-end"><h5>Read more
                                                        <i class="fas fa-angle-double-right"></i></h5></a>

                                            </div>
                                    </div>
                                @endforeach
                            @endif
                                    </div>

                    </div>
                </div>
                <div class="col-md-2" style="margin-bottom: 20px">
                    <div class="card testimonial-card">
                        <div class="card-up indigo lighten-1"></div>

                        <!-- Avatar -->
                        <div class="avatar mx-auto white">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg"
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
@endsection


