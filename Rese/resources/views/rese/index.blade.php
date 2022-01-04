@extends('/rese/layouts/main')

@section('title', '店舗ページ')
@section('main')

<div>
  <div class="flex2">
    <div>
      <form action="/" method="get">
        <p>
          <select name="shop_area" size="1">
            <option value="">All area</option>
            <option value="東京都">東京都</option>
            <option value="大阪府">大阪府</option>
            <option value="福岡県">福岡県</option>
          </select>
        </p>
    </div>
    <div>
      <p>
        <select name="shop_genre" size="1">
          <option value="">All area</option>
          <option value="寿司">寿司</option>
          <option value="焼肉">焼肉</option>
          <option value="居酒屋">居酒屋</option>
          <option value="イタリアン">イタリアン</option>
          <option value="ラーメン">ラーメン</option>
        </select>
      </p>
    </div>
    <div>
      <input type="text" name="shop_name" id="" placeholder="Search...">
    </div>
    <div>
      <button type="submit">
        <img src="storage/icon/seach.svg" class="icon" alt="">
      </button>
    </div>
    </form>
  </div>
  <div>店舗ページ
    <div class="card_group">
      @foreach ($shops as $items)
      <div class="card_item">
        <p>
          <img src="storage/images/shop_{{$items->id}}.jpg" class=" card_img">
        </p>
        <div class="card_content">
          <h2 class="card-ttl">店の名前{{$items->shop_name}}</h2>
          <div>
            <p><span>タグ{{$items->shop_area}}</span><span>タグ{{$items->shop_genre}}</span></p>
          </div>
          <div>
            <a href="/detail/{{$items->id}}"><button type="button">詳しく見る</button></a>
          </div>
          <div>@auth
            <span>
              <img src="">
              <?php
              $favoriteFlag = false;
              foreach ($favorites as $favorite) {
                if ($items->id === $favorite->shop_id) {
                  $favoriteFlag = true;
                  break;
                }
              }
              ?>
              @if($favoriteFlag)
              <a href="/notfavorite/{{$items->id}}" class="">
                いいね取り消し
              </a>
              @else
              <a href="/favorite/{{$items->id}}" class="">
                いいね
              </a>
              @endif
            </span>
            @endauth
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection