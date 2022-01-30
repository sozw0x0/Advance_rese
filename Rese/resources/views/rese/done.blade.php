@extends('/rese/layouts/main')

@section('title', '予約完了')
@section('main')
<div class="content_card card_content">
  <h2 class="txt_c">予約が完了しました。</h2>
  <div class="flex3">
    <a href="{{ url('/') }}" class="none">
      <div class="navIcon">
        <img src="{{ asset('/storage/icon/home.svg') }}" class="icon" alt="">
        <div class="navText">TOP</div>
      </div>
    </a>
    <a href="{{ url('/mypage') }}" class="none">
      <div class="navIcon">
        <img src="{{ asset('/storage/icon/mypage.svg') }}" class="icon" alt="">
        <div class="navText">マイページ</div>
      </div>
    </a>
  </div>
</div>
@endsection