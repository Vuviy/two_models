<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>news_user_list</title>
</head>
<body>

<h1>news user list</h1>
<hr>
<a href="{{route('user_news.index')}}">main user</a>
<a href="{{route('home')}}">home</a>

<hr>
<form action="{{route('news.index')}}" method="GET" >
    <div style="display: flex">
        <button type="submit">Sort by:</button>
        <div>
            <span style="padding: 10px; margin: 10px; background: rgb(151, 155, 132);">
                <label for="pubdate">pubdate</label>
                <input name="sort" type="radio" id="pubdate" value="pubdate">
            </span>
            <span style="padding: 10px; margin: 10px; background: rgb(151, 155, 132)">
                <label for="views">views</label>
                <input name="sort" type="radio" id="views" value="views">
            </span>
        </div>
    </div>
    
</form>
<a href="{{route('user_news.index')}}"></a>

<div>

    @foreach ($novelties as $novelty)
    <a href="{{route('news.show', ['id'=>$novelty->id])}}">
    <div style="display: flex; background: rgb(151, 155, 132); border: 2px solid black; margin: 20px; padding: 20px">
        <div>
            <img style="width: 200px; height: 200px" src="{{asset($novelty->img)}}" alt="">
        </div>
      <div style="background: gray; border: 2px solid black; margin: 20px; padding: 20px">
        <h2>{{$novelty->title}}</h2>
        <p>{{$novelty->content}}</p>
        <p>pudate: <span>{{$novelty->created_at}}</span></p>
        <p>views: <span>{{$novelty->views}}</span></p>
     </div> 
    </div> 
    </a> 
    @endforeach
    <div style="margin: 0 auto; text-align: center; font-size: 40px; padding: 30px; background: rgb(137, 138, 87);">

    {{$novelties->links('vendor.pagination.semantic-ui')}}

   </div>
</div>


</body>
</html>
