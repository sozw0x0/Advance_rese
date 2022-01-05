@extends('/rese/layouts/main')

@section('title', '新規登録')
@section('main')

<div class="content_card">
  <h1 class="card_head">
    新規登録
  </h1>
  <div class="content_item">
    <form action=" {{ route('register') }}" method="POST">
      @csrf
      <div class="content_f">
        <label for="name"><span></span></label>
        <input type="text" name="name" value="{{ old('name') }}">
        @if ($errors->has('name'))
        <p class="error-message">{{ $errors->first('name') }}</p>
        @endif
      </div>
      <div class="content_f">
        <label for="email"><span></span></label>
        <input type="email" name="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
        <p class="error-message">{{ $errors->first('email') }}</p>
        @endif
      </div>
      <div class="content_f">
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
</div>
@endsection