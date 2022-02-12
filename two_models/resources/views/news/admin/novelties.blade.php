<h1>news list</h1>
<hr>
<div>
<a href="{{route('novelties.index')}}">news list</a>
<a href="{{route('novelties.create')}}">new add</a>
</div>
<a href="{{route('admin_news.index')}}">main admin</a>
<a href="{{route('home')}}">home</a>

<hr>
@if (session()->has('success'))
  <div class="">
      {{session('success')}}
  </div>
  <hr>
@endif

<table class="" style="width: 500px">
  <thead>
    <tr>
      <th>title</th>
      <th>status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($novelties as $novelty)
    <tr>
      <td style="text-align: center">{{$novelty->title}}</td>
      <td style="text-align: center">{{$novelty->status}}</td>
      <td style="text-align: center">
        <a href="{{route('novelties.edit', ['novelty'=> $novelty->id])}}" class="">edit
        </a>
        <form action="{{route('novelties.destroy', ['novelty'=> $novelty->id])}}" method="post" class="">
            @csrf
            @method('DELETE')
          <button type="submit" class="">delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
