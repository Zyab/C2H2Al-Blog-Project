@include('home-page.header2')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-10" style="margin-bottom: 20px">
                @yield('main')
            </div>
            <div class="col-md-2" style="margin-bottom: 20px">
                <!-- Card Light -->
                <div class="card">
                    <!-- Card image -->
                    <div class="view overlay">

                        <a href="{{ url('/home') }}">
                            <img class="card-img-top"
                                 src="{{asset('storage/'.Auth::user()->image)}}"
                                 alt="Card image cap">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body" style="text-align: center">
                        <!-- Social shares button -->
                        <!-- Title -->
                        <h4 class="card-title" style="text-align: center">{{ Auth::user()->name }}</h4>
                        <hr>
                        <!-- Text -->
                        <p class="card-text">My name is Activello and I am an awesome WordPress blog theme for
                            photography, food, travel and other blogs. I was created by colorlib..</p>
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
                        <a href="{{route('post.create')}}" style="color: black; text-align: center"> Thêm mới bài viết</a>
                        <br>
                        <a href="{{route('post.list')}}" style="color: black; text-align: center"> Danh Sách Bài Viết</a>
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
