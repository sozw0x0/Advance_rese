@extends('/rese/layouts/main')

@section('title', 'ログイン')
@section('content')

<body>
  <div class="card">
    <h1>ログイン</h1>
    <form action=" {{ route('login') }}" method="POST">
      @csrf
      <div>
        <label for="email"><span></span></label>
        <input type="email" name="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
        <p class="error-message">{{ $errors->first('email') }}</p>
        @endif
      </div>
      <div>
        <label for="password"><span></span></label>
        <input type="password" name="password" value="{{ old('password') }}">
        @if ($errors->has('pass'))
        <p class="error-message">{{ $errors->first('pass') }}</p>
        @endif
      </div>
      <div>
        <input type="submit" value="ログイン" class="button">
      </div>
    </form>
  </div>
  @endsection