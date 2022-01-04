<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&family=Zen+Kaku+Gothic+New:wght@500&family=Zen+Maru+Gothic&display=swap" rel="stylesheet">

  <title>@yield('title')</title>
</head>

<body class="full_page">
  <header class="wrap header_wrap">
    <a href="/" class="logo none">
      <div class="flex">
        <img src="storage/icon/logo.svg" class="site_logo" alt="">
        <div class="ttl"> Rese</div>
      </div>
    </a>
    <nav class="nav">
      <ul class="nav_wrap">
        <li class="nav_item">
          <a href="{{ url('/') }}" class="none">
            <div class="navIcon">
              <img src="storage/icon/home.svg" class="icon" alt="">
              <div class="navText">TOP</div>
            </div>
          </a>
        </li>
        @auth
        <li class="nav_item">
          <a href="{{ url('/mypage') }}" class="none">
            <div class="navIcon">
              <img src="storage/icon/mypage.svg" class="icon" alt="">
              <div class="navText">マイページ</div>
            </div>
          </a>
        </li>
        <li class="nav_item">
          <form action="{{ route('logout') }}" method="POST" class="none">
            @csrf
            <a href="route('logout')" onclick="event.preventDefault();
            this.closest('form').submit();" class="none">
              <div class="navIcon">
                <img src="storage/icon/logout.svg" class="icon" alt="">
                <div class="navText">ログアウト</div>
              </div>
            </a>
          </form>
        </li>
        @endauth
        @guest
        <li class="nav_item">
          <a href="{{ route('register') }}" class="none">
            <div class="navIcon">
              <img src="storage/icon/mypage.svg" class="icon" alt="">
              <div class="navText">新規登録</div>
            </div>
          </a>
        </li>
        <li class="nav_item">
          <a href="{{ route('login') }}" class="none">
            <div class="navIcon">
              <img src="storage/icon/login.svg" class="icon" alt="">
              <div class="navText">ログイン</div>
            </div>
          </a>
        </li>
        @endguest
      </ul>
    </nav>
  </header>

  <div class="main_content">
    @yield('main')
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>