@extends('layouts.app')
@section('content')


  <div class='container'>
    <tr>




    <th></th>
    </tr>
      <form action="/profile/edit" method="get">
      @method('GET')
      @csrf
      <class="form-group">
      <th>UserName</th>
      <input type="text" name="upPost" value="{{$profile->name}}" class="form-control" required>

      <th>Icon Image</th>
      <input type="text" name="upPost" value="{{$profile->image}}" class="form-control" required>

      <th>MailAddress</th>
      <input type="text" name="upPost" value="{{$profile->email}}" class="form-control" required>

      <th>Password</th>
      <input type="text" name="upPost" value="{{$profile->password}}" class="form-control" required>

      <th>Password confirm</th>
      <input type="text" name="upPost" value="{{$profile->password}}" class="form-control" required>

      <th>Bio</th>
      <input type="text" name="upPost" value="{{$profile->bio}}" class="form-control" required>

      <div class="pull-right submit-btn">
      <button type="submit" class="btn btn-primary">更新</button>
      </div>



<!-- formは一つ。この中に書いていく -->
      </form>
  </div>

@endsection
