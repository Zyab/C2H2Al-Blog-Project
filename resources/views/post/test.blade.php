<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @font-face {
            font-family: cedarville-font-family;
            src: url("{{ asset('fonts/Cedarville-Cursive.ttf') }}");
            font-weight: normal;
        }
        @font-face {
            font-family: cedarville-font-family;
            src: url("{{ asset('fonts/Cadarville-Cursive.ttf') }}");
            font-weight: bold;
        }
    </style>
</head>
<body>
Title: <p>{!! $posts->title !!}</p>
<br>
Content: <p>{!! $posts->content !!}</p>
<br>
<<<<<<< HEAD
{{--Image: <img src="{{asset("storage/$posts->image")}}" alt="" width="300px" height="300px">--}}
=======
Image: {{$posts->image}}

>>>>>>> 8d51061691160271f334bcd90e4215263fb03e18
</body>
</html>

{{--Image: <img src="{{asset("storage/$posts->image")}}" alt="" width="300px" height="300px">--}}
