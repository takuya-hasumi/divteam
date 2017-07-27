<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DivTeam</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/user.css">
</head>
<body>
  <header class="header">
    <div class="header__bar row">
      <h1 class="grid-6"><a href="/">DivTeam</h1>
      @if (Auth::check())
        <div class="user_nav grid-6">
          <a href="/logout">ログアウト</a>
          <a class="post" href="/messages/create">投稿する</a>
        </div>
      @else
        <div class="grid-6">
          <a href="/login" class="post">ログイン</a>
          <a href="/register" class="post">新規登録</a>
        </div>
      @endif
    </div>
  </header>
  @yield('content')
  <footer>
    <!-- <p></p>
    <ul>
      <li><a href="#">ホーム</a></li>
      <li><a href="#">タイムライン</a></li>
      <li><a href="#">ユーザ一覧</a></li>
      <li><a href="#">チーム一覧</a></li>
      <li><a href="#">マイページ</a></li>
    </ul> -->
  </footer>
</body>
</html>
