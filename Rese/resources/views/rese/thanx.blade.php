@extends('/rese/layouts/main')

@section('title', '登録完了')
@section('main')
<div class="content_card card_content">
  <h2 class="txt_c">ご登録ありがとうございます。</h2>
  <div class="flex3">
    <a href="{{ url('/') }}" class="none">
      <div class="navIcon">
        <img src="{{ asset('/storage/icon/home.svg') }}" class="icon" alt="">
        <div class="navText">TOP</div>
      </div>
    </a>
    <a href="{{ route('login') }}" class="none">
      <div class="navIcon">
        <img src="{{ asset('/storage/icon/login.svg') }}" class="icon" alt="">
        <div class="navText">ログイン</div>
      </div>
    </a>
  </div>
</div>
@endsection