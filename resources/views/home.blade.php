@include('home-page.header2')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-9" style="margin-bottom: 20px">
                @yield('main')
            </div>
            <div class="col-md-3" style="margin-bottom: 20px">
                <!-- Card Light -->
                <div class="card">
                    <!-- Card image -->
                    @if (isset(Auth::user()->image))
                        <div class="view overlay">

                            <center>
                                <a href="{{ url('/home') }}">
                                    <img class="card-img-top"
                                         src="{{asset('storage/'.Auth::user()->image)}}"
                                         alt="Card image cap" style="width: 200px ; height: 200px; border-radius: 50%">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </center>

                        </div>
                @else
                @endif

                <!-- Card content -->
                    <div class="card-body" style="text-align: left">
                        <!-- Social shares button -->
                        <!-- Title -->
                        <h4 class="card-title" style="text-align: center">{{ Auth::user()->name }}</h4>
                        <hr>
                        <!-- Text -->
                        <ul>
                            <li><h5>Your Email: {{Auth::user()->email }}</h5></li>
                            <li><h5>Your Address: {{Auth::user()->address }}</h5></li>

                        </ul>
                        <!-- Link -->
                        <hr>
                        <h4 class="widget-title" style="text-align: center">Follow Me</h4>
                        <!-- social icons -->
                        <p style="text-align: center">
                            <a href="https://www.facebook.com/colorlib"
                               style="color: black; font-size: 20px; letter-spacing: 5px"><i
                                        class="fab fa-facebook-f"></i></a>
                            <a href="https://www.facebook.com/colorlib"
                               style="color: black; font-size: 20px; letter-spacing: 5px"><i
                                        class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/colorlib"
                               style="color: black;font-size: 20px; letter-spacing: 5px"><i
                                        class="fab fa-google-plus-g"></i></a>
                            <a href="https://www.facebook.com/colorlib"
                               style="color: black;font-size: 20px; letter-spacing: 5px"><i
                                        class="fab fa-instagram"></i></a>
                        </p>
                        <hr>
                        <center>
                            <h5><a href="{{route('post.create')}}" style="color: black; text-align: center"> Thêm mới
                                    bài viết</a></h5>
                            <h5><a href="{{route('post.list')}}" style="color: black; text-align: center"> Danh Sách Bài
                                    Viết</a></h5>
                        </center>

                    </div>
                </div>

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
