@extends('home-page.header2')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-10" style="margin-bottom: 20px">
                    <ul class="list-group">
                        <li class="list-group-item">{{ $post->title }}</li>
                        <li class="list-group-item">{{ $post->description }}</li>
                        <li class="list-group-item">{{ $post->content }}</li>
                        <li class="list-group-item">{{ $post->image }}</li>
                    </ul>
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
                            <a class="btn peach-gradient btn-lg" href="{{route('home')}}"
                               style="background: #009688; color: whitesmoke"> Danh sách bài viết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
