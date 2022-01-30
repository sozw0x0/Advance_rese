@extends('/rese/layouts/main')

@section('title', '店舗詳細')
@section('main')

<div class="flex wrap">
  <div class="l_box">
    <h2>{{$shop_detail->shop_name}}</h2>
    <p>
      <img src="/storage/images/shop_{{$shop_detail->id}}.jpg" class="card_img">
    </p>
    <div>
      <div>
        <p>#{{$shop_detail->shop_area}} #{{$shop_detail->shop_genre}}</p>
        <div>
          <p>{{$shop_detail->shop_summary}}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="r_box">
    <p>予約フォーム</p>
    <div>
      <div class="reserve_form">
        <form action="/reserve/create" method="POST">
          @csrf
          <p>
            <label for="reserve_date">予約日</label><input id="reserve_date" type="date" name="reserve_date" value="2022-01-30">
          </p>
          <p><label for="reserve_time">時間</label><input id="reserve_time" type="time" name="reserve_time" value="17:00:00" step="900"></p>
          <p><label for="reserve_num">人数</label><input id="reserve_num" type="number" name="reserve_num" value="1" min="1" max="30">
          </p>
          <input type="hidden" name="shop_id" value="{{$shop_detail->id}}">
          @if( Auth::check() )
          <input type="hidden" name="user_id" value="{{ Auth::id() }}">
          @endif
      </div>
      <div><button type="submit" class="btn_d">予約する</button></div>
      </form>
    </div>
  </div>
</div>
@endsection