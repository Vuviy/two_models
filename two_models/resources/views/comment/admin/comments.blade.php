<h1>admin comments list</h1>
<hr>
@if (session()->has('success'))
  <div class="">
      {{session('success')}}
  </div>
  <hr>
@endif
<a href="{{route('user_comments.index')}}">user</a>
<a href="{{route('home')}}">home</a>
<a href="{{route('admin_comment.index')}}">main</a>
<hr>

<table class="" style="width: 500px">
    <thead>
    <tr>
        <th>name</th>
        <th>email</th>
        <th>text</th>
        <th>status</th>
        <th>action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($comments as $comment)
        <tr>
            <td style="text-align: center">{{$comment->name}}</td>
            <td style="text-align: center">{{$comment->email}}</td>
            <td style="text-align: center">{{$comment->text}}</td>
            <td style="text-align: center">{{$comment->status}}</td>
            <td style="text-align: center">
                <a href="{{route('comments_ad.edit', ['comments_ad'=> $comment->id])}}" class="">edit
                </a>
                <form action="{{route('comments_ad.destroy', ['comments_ad'=> $comment->id])}}" method="post" class="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="">delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>




{{--<a href="{{route('comments.index')}}">comments list</a>--}}
{{--<a href="{{route('novelties.create')}}">new add</a>--}}
