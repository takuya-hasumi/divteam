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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="/js/function.js"></script>
</head>
<body>
  <header class="header">
    <div class="header__bar row">
      <h1 class="grid-6"><a href="/">DivTeam</a></h1>
      @if (Auth::check())
        <div class="user_nav grid-6">
          <span>
            {{ Auth::user()->name }}
            <ul class="user__info">
              <li>
                <a href="/users/{{ Auth::user()->id }}">マイページ</a>
                <a href="/users">ユーザ一覧</a>
                <a href="/teams">チーム一覧</a>
                <a href="/logout">ログアウト</a>
              </li>
            </ul>
          </span>
          <a href="/messages/create" class="post">投稿する</a>
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
