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
                        <a href="{{ url('/home') }}" style="color: black">
                            <h4 class="card-title" style="text-align: center">{{ Auth::user()->name }}</h4>
                        </a>
                        <ul>
                            <li><h5>Your Email: {{Auth::user()->email }}</h5></li>
                            <li><h5>Your Address: {{Auth::user()->address }}</h5></li>

                            <li><h5><a href="{{route('post.create')}}" style="color: black; text-align: center"> Thêm mới Bài viết</a></h5></li>
                            <li><h5><a href="{{route('post.list')}}" style="color: black; text-align: center"> Danh Sách Bài Viết</a></h5></li>
                            <li><h5><a href="{{route('album.create')}}" style="color: black; text-align: center"> Thêm Album</a></h5></li>
                            <li><h5><a href="{{route('album.list')}}" style="color: black; text-align: center"> Danh Sách Album</a></h5></li>

                        </ul>
                    </div>

                </div>
                <div class="card bg-light mb-4 col-md-12" style="padding: 0px">
                    <div class="card-header">
                        <h3> Bài Viết Gần Đây</h3>
                    </div>
                    <div class="card-body">

                        <?php $posts = Auth::user()->posts->take(5);?>
                        <ul>
                            @foreach($posts as $key => $post)
                                <a href="{{ route('post.show', $post->id) }} " style="color: black">
                                    <li><h5>{{$post->title}}</h5></li>
                                </a>
                            @endforeach
                        </ul>

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


    $(document).ready(function() {

        $(".btn-success").click(function(){
            var html = $(".clone").html();
            $(".increment").after(html);
        });

        $("body").on("click",".btn-danger",function(){
            $(this).parents(".control-group").remove();
        });

    });

</script>

