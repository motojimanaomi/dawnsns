@extends('layouts.app')
@section('content')


  <div class='container'>

      @foreach ($profile as $profile)
      <div>
        {{ $profile->id }}
        {{ $profile->name }}
        {{ $profile->image }}
        {{ $profile->email }}
        {{ $profile->bio }}
      </div>
      <img src="{{ asset('images/' . $profile->image) }}" alt="">
      <form action="/profile" method="get">
      @endforeach

      <td>
      <a class="btn btn-primary" href="/profile/edit">更新</a>
      </td>

      @foreach ($posts as $post)
      <div>
        {{ $post->id }}<br>
        {{ $post->user_id }}<br>
        {{ $post->post }}<br>
        {{ $post->created_at }}<br>
      </div>
      <form action="/profile" method="get">
      @endforeach

  </div>

@endsection
