@extends('layouts.app')
@section('content')


  <div class='container'>
    <tr>




    <th></th>
    </tr>
      <form action="/profile/update" method="post" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <class="form-group">
      <th>UserName</th>
      <input type="text" name="name" value="{{$profile->name}}" class="form-control" required>

      <th>Icon Image</th>
      <input type="text" name="image" value="{{$profile->image}}" class="form-control" required>

      <th>MailAddress</th>
      <input type="text" name="email" value="{{$profile->email}}" class="form-control" required>

      <th>Password</th>
      <input type="text" name="password" class="form-control" required>

      <th>Password confirm</th>
      <input type="text" name="password" class="form-control" required>

      <th>Bio</th>
      <input type="text" name="bio" value="{{$profile->bio}}" class="form-control" required>

      <input type="file" id="file" name="file" class="form-control">
      <div>

      <button type="submit" class="btn btn-success">追加</button>
      </div>



<!-- formは一つ。この中に書いていく -->
      </form>
  </div>

@endsection
