@extends('home')
@section('main')
<div class="container" style="background: whitesmoke">
    <div class="col-md-12">
        <h3>{{$post->title}}</h3>
        <hr>
        <br>
        <img class="card-img-top"
             src="{{asset('storage/'.$post->image)}}"
             alt="Card image cap" >
        <br>
        <p>{!! $post->content !!}</p>
    </div>
    <a class="btn btn-primary" href="{{route('export-pdf',$post->id)}}">EXPORT PDF</a>
</div>

{{--<div id="fb-root"></div>--}}
{{--<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2"></script>--}}

{{--<div class="fb-share-button"--}}
     {{--data-href="http://127.0.0.1:8000/"--}}
     {{--data-layout="button_count" data-size="large">--}}
    {{--<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8000%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a>--}}
{{--</div>--}}

{{--<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2F127.0.0.1%3A8000%2Fpost%2Fshow%2F6&layout=button_count&size=large&width=94&height=28&appId" width="94" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>--}}
@endsection
