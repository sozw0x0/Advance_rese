@extends('/rese/layouts/main')

@section('title', '店舗ページ')
@section('main')

<div class="flex wrap">
  <div class="l_box">
    <p>予約変更</p>
    <div>
      @foreach ($items as $item)
      <h2 class="">{{$item->shop->shop_name}}</h2>
      <p>
        <img src="/storage/images/shop_{{$item->shop->id}}.jpg" class="card_img">
      </p>
      <div>
        <div>
          <p>#{{$item->shop->shop_area}} #{{$item->shop->shop_genre}}</</p>
          <div>
            <p>{{$item->shop->shop_summary}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="r_box">予約内容
    <div>
      <div class="reserve_form">
        <table>
          <tr>
            <th>Shop</th>
            <td>{{$item->shop->shop_name}}</td>
          </tr>
          <tr>
            <th>Date</th>
            <td>
              {{$item->reserve_date}}
            </td>
          </tr>
          <tr>
            <th>Time</th>
            <td>{{$item->reserve_time}}</td>
          </tr>
          <tr>
            <th>Number</th>
            <td>{{$item->reserve_num}}</span></td>
          </tr>
        </table>
      </div>
      <div>
        <div class="reserve_form">
          <form action="/reserve/update/{{$item->id}}" method="POST">
            @csrf
            <input id="reserve_date" type="date" name="reserve_date" value="" onforminput="onforminput();">
            <input type="time" name="reserve_time" value="" step="900">
            <input type="number" name="reserve_num" value="" min="1">
            <input type="hidden" name="id" value="{{$item->id}}">
        </div>
        <div><button type="submit">予約変更</button></div>
        </form>
        @endforeach
      </div>
    </div>
  </div>
  @endsection