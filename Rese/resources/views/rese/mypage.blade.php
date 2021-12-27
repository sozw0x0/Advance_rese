@extends('/rese/layouts/main')

@section('title', 'マイページ')
@section('main')
<div>マイページ
  <div>
    予約状況
  </div>
  <div>
    {{ Auth::user()->name }}
  </div>
  <div>
    <div>
      <div>
        <p>予約状況</p>
        <div>
          <span></span>予約
        </div>
        @foreach ($items as $item)
        <div>
          <form action="/reserve/delete/{{$item->id}}" method="post">
            @csrf
            <input type="submit" value="×">
          </form>
        </div>
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
        <div>
          予約変更
          <form action="/reserve/edit/{{$item->id}}" method="post">
            @csrf
            <input type="submit" value="予約変更">
        </div>
        @endforeach
      </div>
      <div>
        お気に入り
        @foreach ($favoriteLists as $items)
        <div class="card_item">
          <p>
            <img src="storage/images/shop_{{$items->shop->id}}.jpg" class=" card_img">
          </p>
          <div class="card_content">
            <h2 class="card-ttl">店の名前{{$items->shop->shop_name}}</h2>
            <div>
              <p><span>タグ{{$items->shop->shop_area}}</span><span>タグ{{$items->shop->shop_genre}}</span></p>
            </div>
            <div>
              <a href="/detail/{{$items->shop->id}}"><button type="button">詳しく見る</button></a>
            </div>
            <div>
              <span>
                <img src="">
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
                <a href="/notfavorite/{{$items->shop->id}}" class="">
                  いいね取り消し
                </a>
                @else
                <a href="/favorite/{{$items->shop->id}}" class="">
                  いいね
                </a>
                @endif
              </span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
</div>
@endsection