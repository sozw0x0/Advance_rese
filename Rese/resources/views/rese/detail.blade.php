@extends('/rese/layouts/main')

@section('title', '店舗ページ')
@section('main')
<p>店舗詳細</p>

<div class="flex">
  <div class="detail">
    <h2 class="">店の名前{{$shop_detail->shop_name}}</h2>
    <p>
      <img src="/storage/images/shop_{{$shop_detail->id}}.jpg" class=" card_img">
    </p>
    <div class="">
      <div>
        <p><span>タグ{{$shop_detail->shop_area}}</span><span>タグ{{$shop_detail->shop_genre}}</span></p>
        <div>
          <p>{{$shop_detail->shop_summary}}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="reserve_table">予約
    <div>
      <div class="reserve_form">
        <form action="/reserve/create" method="POST">
          @csrf
          <input id="reserve_date" type="date" name="reserve_date" value="" onforminput="onforminput();">
          <input type="time" name="reserve_time" value="">
          <input type="number" name="reserve_num" value="" min="1">
          <input type="hidden" name="shop_id" value="{{$shop_detail->id}}">
          @if( Auth::check() )
          <input type="hidden" name="user_id" value="{{ Auth::id() }}">
          @endif
      </div>
      <div>
        <table>
          <tr>
            <th>shop</th>
            <td>{{$shop_detail->shop_name}}</td>
          </tr>
          <tr>
            <th>Date</th>
            <td>
              <p class="return_date"></p>
              <script>
                function oninput() {
                  var value = document.getElementById("reserve_date").value;
                  document.querySelector('.return_date').innerHTML = value;
                }
              </script>
            </td>
          </tr>
          <tr>
            <th>Time</th>
            <td><span id="output_time"></span></td>
          </tr>
          <tr>
            <th>Number</th>
            <td><span id="output_number"></span></td>
          </tr>
        </table>
      </div>
      <div><button type="submit">予約する</button></div>
      </form>
    </div>
  </div>
</div>
@endsection