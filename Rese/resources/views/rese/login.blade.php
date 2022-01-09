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
          <span>
            <img src="storage/icon/mail.svg" alt="" class="icons">
          </span>
          <input type="email" name="email" value="{{ old('email') }}" placeholder="email" class="btm">
          @if ($errors->has('email'))
          <p class="error-message">{{ $errors->first('email') }}</p>
          @endif
        </div>
        <div class="content_f">
          <span>
            <img src="storage/icon/pass.svg" alt="" class="icons">
          </span>
          <input type="password" name="password" placeholder="password" class="btm">
          @if ($errors->has('pass'))
          <p class="error-message">{{ $errors->first('pass') }}</p>
          @endif
        </div>
        <div class="btn_r">
          <input type="submit" value="ログイン" class="btn_d">
        </div>
      </form>
    </div>
  </div>
</div>
@endsection