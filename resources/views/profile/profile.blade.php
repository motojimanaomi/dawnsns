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
      <form action="/profile" method="get">
      @endforeach

      @foreach ($posts as $post)
      <div>
        {{ $posts->id }}
        {{ $posts->user_id }}
        {{ $posts->post }}
        {{ $posts->created_at }}
      </div>
      <form action="/profile" method="get">
      @endforeach

  </div>

@endsection
