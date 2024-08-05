@extends('layouts.app')
@section('content')


  <div class='container'>

      @foreach ($follows as $follow)
      <div>
        {{ $follow->name }}
      </div>
      <td>
      <a class="btn btn-primary" href="/other/profile/{{ $follow->user_id }}">プロフィール</a>
      </td><br>
      <form action="/follow/create" method="post">

      @endforeach

      @foreach ($posts as $post)
      <tr>
        <td>{{ $post->name }}</td><br>
        <td>{{ $post->post }}</td><br>
        <td>{{ $post->created_at }}</td><br>
      </tr>
      @endforeach

  </div>

@endsection
