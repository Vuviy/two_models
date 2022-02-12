<h1>admin comments edit</h1> <span>id: {{$comment->id}}</span>
<br>
<a href="{{route('home')}}">home</a>
<a href="{{route('admin_comment.index')}}">main</a>
<hr>

@if ($errors->any())
  <div>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

<form action="{{route('comments_ad.update', ['comments_ad'=>$comment->id])}}" method="post">
    @csrf
    @method('PUT')

    <div>
        <label for="title">name</label>
        <input type="text" id="name" name="name" value="{{$comment->name}}">
    </div>
    <div>
        <label for="email">email</label>
        <input type="text" id="email" name="email" value="{{$comment->email}}">
    </div>
    <div>
        <label for="text">text</label>
        <input type="text" id="text" name="text" value="{{$comment->text}}">
    </div>
    <div>
        <label for="status">status</label>
        <select type="text" id="status" name="status">
            <option value="опубликован" @if($comment->status == 'опубликован') selected  @endif>опубликован</option>
            <option value="не опубликован" @if($comment->status  == 'не опубликован')selected  @endif>не опубликован</option>
            <select>
    </div>
    <button type="submit">edit</button>
</form>