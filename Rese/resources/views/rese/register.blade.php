<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>新規会員登録</title>
</head>

<body>
  <div class="card">
    <h1>新規登録</h1>
    <form action=" {{ route('register') }}" method="POST">
      @csrf
      <div>
        <label for="user_name"><span></span></label>
        <input type="text" name="user_name" value="{{ old('user_name') }}">
        @if ($errors->has('user_name'))
        <p class="error-message">{{ $errors->first('user_name') }}</p>
        @endif
      </div>
      <div>
        <label for="user_email"><span></span></label>
        <input type="email" name="user_email" value="{{ old('user_email') }}">
        @if ($errors->has('user_email'))
        <p class="error-message">{{ $errors->first('user_email') }}</p>
        @endif
      </div>
      <div>
        <label for="user_pass"><span></span></label>
        <input type="password" name="user_pass">
        @if ($errors->has('user_pass'))
        <p class="error-message">{{ $errors->first('user_pass') }}</p>
        @endif
      </div>
      <div>
        <input type="submit" value="登録" class="button">
      </div>
    </form>
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