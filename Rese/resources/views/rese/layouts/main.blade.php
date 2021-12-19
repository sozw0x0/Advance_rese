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

  <title>@yield('title')</title>
</head>

<body class="full_page">
  <header class="wrap header_wrap">
    <h1><a href="/" class="logo">Rese</a></h1>
    <nav class="nav">
      <ul class="nav_wrap">
        <li class="nav_item">
          <a href="{{ url('/') }}">TOP</a>
        </li>
        <li class="nav_item">@auth
          <a href="{{ url('/mypage') }}">mypage</a>
        </li>
        <li>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <a href="route('logout')" onclick="event.preventDefault();
            this.closest('form').submit();">Log out</a>
          </form>
        </li>
        @endauth
        <li class="nav_item">@guest
          <a href="{{ route('register') }}">Register</a>
          <a href="{{ route('login') }}">Log in</a>
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