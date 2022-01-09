@extends('/rese/layouts/main')

@section('title', 'ログイン')
@section('main')

<div>
  <div class="content_card">
    <h1 class="card_head">
      ログイン
    </h1>
    <div class="content_item">
      <form action=" {{ route('login') }}" method="POST">
        @csrf
        <div class="content_f">
          <label for="email"><span></span></label>
          <input type="email" name="email" value="{{ old('email') }}">
          @if ($errors->has('email'))
          <p class="error-message">{{ $errors->first('email') }}</p>
          @endif
        </div>
        <div class="content_f">
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
  </div>
</div>
@endsection