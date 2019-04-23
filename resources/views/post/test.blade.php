<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Title: <p>{!! $posts->title !!}</p>
<br>
Content: <p>{!! $posts->content !!}</p>
<br>
Image: {{$posts->image}}
</body>
</html>

{{--Image: <img src="{{asset("storage/$posts->image")}}" alt="" width="300px" height="300px">--}}

