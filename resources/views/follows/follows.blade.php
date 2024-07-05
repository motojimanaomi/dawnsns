@extends('layouts.app')
@section('content')


  <div class='container'>

      @foreach ($follows as $follow)
      <div>
        {{ $follow->name }}
      </div>
      <form action="/follow/create" method="post">

      @endforeach

      @foreach ($posts as $post)
      <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->post }}</td>
        <td>{{ $post->created_at }}</td>
      </tr>
      @endforeach

  </div>

@endsection
