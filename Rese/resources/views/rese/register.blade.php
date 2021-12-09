@extends('/rese/layouts/main')

@section('title', '新規登録')
@section('content')
<div class="card">
  <h1>新規登録</h1>
  <form action=" {{ route('register') }}" method="POST">
    @csrf
    <div>
      <label for="name"><span></span></label>
      <input type="text" name="name" value="{{ old('name') }}">
      @if ($errors->has('name'))
      <p class="error-message">{{ $errors->first('name') }}</p>
      @endif
    </div>
    <div>
      <label for="email"><span></span></label>
      <input type="email" name="email" value="{{ old('email') }}">
      @if ($errors->has('email'))
      <p class="error-message">{{ $errors->first('email') }}</p>
      @endif
    </div>
    <div>
      <label for="password"><span></span></label>
      <input type="password" name="password">
      @if ($errors->has('password'))
      <p class="error-message">{{ $errors->first('password') }}</p>
      @endif
    </div>
    <div>
      <input type="submit" value="登録" class="button">
    </div>
  </form>
</div>
@endsection