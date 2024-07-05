<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8"'>
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <link rel='stylesheet' href="{{ asset('/css/style.css') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  @yield('content')

  <footer>
    <small>Laravel@dawn.curriculum</small>
    <a class="btn btn-primary" href="/follow/search">ユーザー検索</a>
  </footer>

</body>



</html>
