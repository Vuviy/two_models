<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>main</title>
</head>
<body>

<div style="display: flex; margin: 100px auto; background: lightgray; padding: 50px">
    <div style="margin: 0 auto; background: rgba(204, 120, 120, 0.37); padding: 30px">
        <h2>news</h2>
        <div style="margin: 0 auto; background: rgba(147, 204, 120, 0.37); padding: 30px">
            <a href="{{route('admin_news.index')}}">admin</a>
        </div>
        <div style="margin: 0 auto; background: rgba(147, 204, 120, 0.37); padding: 30px">
            <a href="{{route('user_news.index')}}">user</a>
        </div>
    </div>
    <div style="margin: 0 auto; background: rgba(204, 120, 120, 0.37); padding: 30px">
        <h2>guests</h2>
         <div style="margin: 0 auto; background: rgba(147, 204, 120, 0.37); padding: 30px">
            <a href="{{route('admin_comment.index')}}">admin</a>
        </div>
        <div style="margin: 0 auto; background: rgba(147, 204, 120, 0.37); padding: 30px">
            <a href="{{route('user_comments.index')}}">user</a>
        </div>
    </div>
</div>

</body>
</html>
