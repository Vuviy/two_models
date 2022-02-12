<h1>news add</h1>
<hr>

<div>
<a href="{{route('novelties.index')}}">news list</a>
<a href="{{route('novelties.create')}}">new add</a>
</div>
<a href="{{route('admin_news.index')}}">main admin</a>
<a href="{{route('home')}}">home</a>


<hr>
<div>
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
</div>
<hr>

<form action="{{route('novelties.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div>
    <label for="title">title</label>
    <input type="text" id="title" name="title">
  </div>
  <div>
    <label for="content">content</label>
    <input type="text" id="content" name="content">
  </div>
  <div>
    <label for="status">status</label>
    <select type="text" id="status" name="status">
      <option value="опубликована">опубликована</option>  
      <option value="не опубликована">не опубликована</option>  
    <select>
  </div>
  <div>
    <label for="img">img</label>
    <input type="file" id="img" name="img">
  </div>
  <button type="submit">send</button>
</form>
