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
        <span>
          <img src="{{ asset('/storage/icon/name.svg') }}" alt="" class="icons">
        </span>
        <input type="text" name="name" value="{{ old('name') }}" placeholder="username" class="btm">
        @if ($errors->has('name'))
        <p class="error-message">{{ $errors->first('name') }}</p>
        @endif
      </div>
      <div class="content_f">
        <span>
          <img src="{{ asset('/storage/icon/mail.svg') }}" alt="" class="icons">
        </span>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="email" class="btm">
        @if ($errors->has('email'))
        <p class="error-message">{{ $errors->first('email') }}</p>
        @endif
      </div>
      <div class="content_f">
        <span>
          <img src="{{ asset('/storage/icon/pass.svg') }}" alt="" class="icons">
        </span>
        <input type="password" name="password" placeholder="password" class="btm">
        @if ($errors->has('password'))
        <p class="error-message">{{ $errors->first('password') }}</p>
        @endif
      </div>
      <div class="btn_r">
        <input type="submit" value="登録" class="btn_d">
      </div>
    </form>
  </div>
</div>
@endsection