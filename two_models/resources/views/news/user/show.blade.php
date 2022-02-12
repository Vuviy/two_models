<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>news_user_show</title>
</head>
<body>

<h1>news user show {{$novelty->title}}</h1>
<hr>
{{-- <a href="{{route('admin_news.index')}}">admin</a> --}}
<a href="{{route('user_news.index')}}">main user</a>
<a href="{{route('home')}}">home</a>

<hr>

<div>

    <div style="background: gray; border: 2px solid black; margin: 20px; padding: 20px">
        <img style="width: 500px; height: 400px" src="{{asset($novelty->img)}}" alt="">
        <h2>{{$novelty->title}}</h2>
        <p>{{$novelty->content}}</p>
        <p>pudate: <span>{{$novelty->created_at}}</span></p>
        <p>views: <span>{{$novelty->views}}</span></p>
    </div> 
   
</div>


</body>
</html>
