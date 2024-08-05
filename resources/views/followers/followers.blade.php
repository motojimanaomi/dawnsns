@extends('layouts.app')
@section('content')


  <div class='container'>

      @foreach ($followers as $follower)
      <div>
        {{ $follower->name }}
      </div>
      <td>
      <a class="btn btn-primary" href="/other/profile/{targetUserId}">プロフィール</a>
      </td>
      <form action="/follower-list" method="get">

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
