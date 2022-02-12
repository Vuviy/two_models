

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>adding new comment</title>
</head>
<body>
<h1>adding new comment</h1>
<hr>
<a href="{{route('admin_comment.index')}}">admin</a>
<a href="{{route('user_comments.index')}}">main user</a>
<hr>
@if ($errors->any())
  <div class="">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
@if (session()->has('success'))
  <div class="">
      {{session('success')}}
  </div>
@endif

<div>
    <form action="{{route('comments.store')}}" method="POST">
        @csrf
        <div>
            <label for="name">name</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="comment">comment</label>
            {{-- <textarea type="text" id="comment" name="comment"><textarea> --}}
            <textarea name="text" id="comment"></textarea>
        </div>
         <div>
{{--            <label for="capcha">capcha</label>--}}
{{--            <input type="text" id="capcha" name="capcha">--}}
             {!! NoCaptcha::renderJs() !!}
             {!! NoCaptcha::display() !!}
             @if ($errors->has('g-recaptcha-response'))
                 <span class="help-block">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </span>
             @endif
        </div>

    <button type="submit">add comment</button>
    </form>


</div>


</body>
</html>
