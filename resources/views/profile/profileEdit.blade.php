@extends('layouts.app')
@section('content')


  <div class='container'>
    <tr>
    <th>UserName</th>
    <th>MailAddress</th>
    <th>Password</th>
    <th>Password confirm</th>
    <th>Bio</th>
    <th>Icon Image</th>
    <th></th>
    </tr>
      <form action="/profile/edit" method="get">
      <div>
        {{ $profile->id }}
        {{ $profile->name }}
        {{ $profile->image }}
        {{ $profile->email }}
        {{ $profile->bio }}
      </div>
<!-- formは一つ。この中にもろもろ書いていく -->
      </form>
  </div>

@endsection
