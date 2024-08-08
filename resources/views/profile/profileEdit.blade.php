@extends('layouts.app')
@section('content')


  <div class='container'>
    <tr>




    <th></th>
    </tr>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
      <form action="/profile/update" method="post" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <class="form-group">
      <th>UserName</th>
      <input type="text" name="name" value="{{$profile->name}}" class="form-control">

      <th>Icon Image</th>
      <input type="file" id="file" name="file" class="form-control">
      <div>

      <th>MailAddress</th>
      <input type="text" name="email" value="{{$profile->email}}" class="form-control">

      <th>Password</th>
      <input type="text" name="password" class="form-control">

      <th>Password confirm</th>
      <input type="text" name="password" class="form-control">

      <th>Bio</th>
      <input type="text" name="bio" value="{{$profile->bio}}" class="form-control">

      <button type="submit" class="btn btn-success">追加</button><br>

      </div>



<!-- formは一つ。この中に書いていく -->
      </form>
  </div>

@endsection
