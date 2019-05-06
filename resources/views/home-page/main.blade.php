<section class="blog-area section">
    <div class="col-sm-10 offset-1">

        <div class="row">
            @foreach($posts as $key => $post)
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="{{asset('storage/'.$post->image)}}"
                                                         alt="Blog Image"></div>
                            <div class="blog-info">

                                <h4 class="title"><a href="#"><b>{{$post->title}}</b></a></h4>
                                <ul class="post-footer">
                                    <li><a href="#"><i class="fas fa-heart"></i>57</a></li>
                                    <li><a href="#"><i class="fas fa-comments"></i>6</a></li>
                                    <li><a href="#"><i class="fas fa-eye"></i>138</a></li>
                                </ul>

                            </div><!-- blog-info -->
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->
            @endforeach


        </div><!-- row -->

        <center>{{ $posts->appends(request()->query()) }}</center>
    </div><!-- container -->
</section><!-- section -->

