<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>comments_user_list</title>
</head>
<body>

<h1>comments user list</h1>
<a href="{{route('admin_comment.index')}}">admin</a>
<a href="{{route('home')}}">home</a>
<hr>
<a href="{{route('user_comments.index')}}">main user</a>
<hr>

<div>

    @foreach ($comments as $comment)
    <div style="display: flex; background: rgb(151, 155, 132); border: 2px solid black; margin: 20px; padding: 20px">

      <div style="background: gray; border: 2px solid black; margin: 20px; padding: 20px">
        <h2>Name: {{$comment->name}}</h2>
        <p>{{$comment->email}}</p>
        <p>Comment: <span>{{$comment->text}}</span></p>
     </div>
    </div>
    @endforeach
    <div style="margin: 0 auto;">
        <a style="margin: 0 auto; text-align: center; font-size: 30px; padding: 30px; background: rgb(137, 138, 87); margin:100px 50px" href="{{route('comments.create')}}">add comment</a>
    </div>
        <div style="margin: 0 auto; text-align: center; font-size: 40px; padding: 30px; background: rgb(137, 138, 87);">

    {{$comments->links('vendor.pagination.semantic-ui')}}

   </div>

</div>


</body>
</html>
