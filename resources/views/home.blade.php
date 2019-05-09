@include('home-page.header2')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-3" style="margin-bottom: 20px">
                <!-- Card Light -->

                <div class="card bg-light mb-4 col-md-12" style="padding: 0px">
                    <div class="card-header">
                        @if (isset(Auth::user()->image))
                            <div class="view overlay">
                                <center>
                                    <a href="{{ route('home')  }}">
                                        <img class="card-img-top"
                                             src="{{asset('storage/'.Auth::user()->image)}}"
                                             alt="Card image cap" style="border-radius: 5px">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </center>
                            </div>
                        @else
                        @endif
                    </div>
                    <div class="card-body">
                        <center>
                            <a href="{{ url('/home') }}" style="color: black">
                                <h3 class="card-title" style="text-align: center">{{ Auth::user()->name }}</h3>
                            </a>
                        </center>

                        <hr>
                        <div class="col-md-12 offset-1">
                            <li><h4>Your Email: {{Auth::user()->email }}</h4></li>
                            <li><h4>Your Address: {{Auth::user()->address }}</h4></li>
                        </div>

                        <hr>
                        <div class="col-md-12 offset-1">
                            <ul>


                                <li><h4><a href="{{route('post.create')}}" style="color: black; text-align: center">
                                            Thêm mới Bài viết</a></h4></li>
                                <br>
                                <li><h4><a href="{{route('post.list')}}" style="color: black; text-align: center"> Danh
                                            Sách Bài Viết</a></h4></li>
                                <br>
                                <li><h4><a href="{{route('album.create')}}" style="color: black; text-align: center">
                                            Thêm Album</a></h4></li>
                                <br>
                                <li><h4><a href="{{route('album.list')}}" style="color: black; text-align: center"> Danh
                                            Sách Album</a></h4></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card bg-light mb-4 col-md-12" style="padding: 0px">
                    <div class="card-header">
                        <center>
                            <h3> Bài Viết Gần Đây</h3>
                        </center>
                    </div>
                    <div class="col-md-12 offset-1">
                        <div class="card-body">

                            <?php $posts = Auth::user()->posts->take(5);?>
                            <ul>
                                @foreach($posts as $key => $post)
                                    <a href="{{ route('post.show', $post->id) }} " style="color: black">
                                        <li><h4>{{$post->title}}</h4></li>
                                    </a>
                                    <br>
                                @endforeach
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-9" style="margin-bottom: 20px">
                @yield('main')
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('editor1', {
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    });
</script>
<script type="text/javascript">


    $(document).ready(function () {

        $(".btn-success").click(function () {
            var html = $(".clone").html();
            $(".increment").after(html);
        });

        $("body").on("click", ".btn-danger", function () {
            $(this).parents(".control-group").remove();
        });

    });
</script>

