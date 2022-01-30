@extends('/rese/layouts/main')

@section('title', 'マイページ')
@section('main')

<div>
  <div class="ttl_m">
    {{ Auth::user()->name }}さん
  </div>
  <div div class="flex wrap flex_w">
    <div class="l_box">
      予約
      <div>
        @foreach ($items as $item)
        <div class="yoyaku">
          <div class="flex">
            <p>予約内容</p>
            <form action="/reserve/delete/{{$item->id}}" method="post">
              @csrf
              <input type="submit" value="×" class="btn_m">
            </form>
          </div>
          <div>
            <table>
              <tr>
                <th>shop</th>
                <td>{{$item->shop->shop_name}}</td>
              </tr>
              <tr>
                <th>Date</th>
                <td>{{$item->reserve_date}}</td>
              </tr>
              <tr>
                <th>Time</th>
                <td>{{$item->reserve_time}}</td>
              </tr>
              <tr>
                <th>Number</th>
                <td>{{$item->reserve_num}}</td>
              </tr>
            </table>
          </div>
          <div class="btn_r">
            <form action="/reserve/edit/{{$item->id}}" method="post">
              @csrf
              <input type="submit" value="予約変更" class="btn_d">
            </form>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="r_box">
      お気に入り
      <div class="card_group_mp">
        @foreach ($favoriteLists as $items)
        <div class="card_item2">
          <p>
            <img src="storage/images/shop_{{$items->shop->id}}.jpg" class=" card_img">
          </p>
          <div class="card_content">
            <h2 class="card-ttl">{{$items->shop->shop_name}}</h2>
            <div>
              <p class="tag">#{{$items->shop->shop_area}} #{{$items->shop->shop_genre}}</p>
            </div>
            <div class="flex wrap">
              <div>
                <a href="/detail/{{$items->shop->id}}"><button type="button" class="btn_d">詳しく見る</button></a>
              </div>
              <div>
                <span>
                  <?php
                  $favoriteFlag = false;
                  foreach ($favorites as $favorite) {
                    if ($items->shop->id === $favorite->shop_id) {
                      $favoriteFlag = true;
                      break;
                    }
                  }
                  ?>
                  @if($favoriteFlag)
                  <div>
                    <a href="/notfavorite/{{$items->shop->id}}" class="">
                      <img src="{{ asset('/storage/icon/favo2.svg') }}" class="favo" alt="">
                    </a>
                  </div>
                  @else
                  <div>
                    <a href="/favorite/{{$items->shop->id}}" class="">
                      <img src="{{ asset('/storage/icon/favo.svg') }}" class="favo" alt="">
                    </a>
                  </div>
                  @endif
                </span>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection