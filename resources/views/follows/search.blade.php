@extends('layouts.app')
@section('content')


  <div class='container'>
    <form action="search/result" method="post">
      @csrf
      <div class="form-group">
        <input type="text" name="keyword" class="form-control" placeholder="ユーザー名">
      </div>
      <div class="pull-right submit-btn">
        <button type="submit" class="btn btn-success">検索</button>
      </div>
    </form>


      @foreach ($users as $user)
      <div>
        {{ $user->name }}
        <!-- UsersController.phpの中にある＄●●を使わないといけない。上にも($users as $user)とあるので{{ $user->id }}となる。 -->
        <form action="/follow/create" method="post">
        @csrf
        <input type="hidden" name="targetUserId" value="{{ $user->id }}">
        <button type="submit" class="btn btn-danger">フォローする</button>
        </form>

        <form action="/follow/delete" method="post" onclick="return confirm('フォローを外してもよろしいでしょうか？')">
        @method('DELETE')
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <button type="submit" class="btn btn-danger">削除</button>
        </form>
        <!-- <a class="btn btn-success" href="/follow/{{ $user->id }}">フォローをはずす</a> -->
      </div>
      @endforeach

  </div>

@endsection
