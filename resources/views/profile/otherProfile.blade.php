@extends('layouts.app')
@section('content')


  <div class='container'>

      @foreach ($profile as $profile)
      <div>
        {{ $profile->name }}
        {{ $profile->image }}
        {{ $profile->email }}
        {{ $profile->bio }}
      </div>
      <form action="/other/profile/{targetUserId}" method="get">
      @endforeach

      @foreach ($posts as $post)
      <div>
        {{ $profile->name }}<br>
        {{ $post->post }}<br>
        {{ $post->created_at }}<br>
      </div>
      <form action="/profile" method="get">
      @endforeach

  </div>

@endsection
