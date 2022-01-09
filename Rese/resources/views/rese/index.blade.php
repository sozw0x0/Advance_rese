@extends('/rese/layouts/main')

@section('title', '店舗ページ')
@section('main')

<div>
  <div class="flex2">
    <div>
      <form action="/" method="get">
        <p>
          <select name="shop_area" size="1" class="height border-radius">
            <option value="">All area</option>
            <option value="東京都">東京都</option>
            <option value="大阪府">大阪府</option>
            <option value="福岡県">福岡県</option>
          </select>
        </p>
    </div>
    <div>
      <p>
        <select name="shop_genre" size="1" class="height">
          <option value="">All genre</option>
          <option value="寿司">寿司</option>
          <option value="焼肉">焼肉</option>
          <option value="居酒屋">居酒屋</option>
          <option value="イタリアン">イタリアン</option>
          <option value="ラーメン">ラーメン</option>
        </select>
      </p>
    </div>
    <div>
      <input type="text" name="shop_name" id="" placeholder="Search..." class="height">
    </div>
    <div>
      <button type="submit" class="btn_s">
        <img src="storage/icon/seach.svg" class="seachIcon" alt="">
      </button>
    </div>
    </form>
  </div>
  <div>
    <div class="card_group">
      @foreach ($shops as $items)
      <div class="card_item">
        <p>
          <img src="storage/images/shop_{{$items->id}}.jpg" class=" card_img">
        </p>
        <div class="card_content">
          <h2 class="card-ttl">{{$items->shop_name}}</h2>
          <div>
            <p class="tag">#{{$items->shop_area}} #{{$items->shop_genre}}</p>
          </div>
          <div class="flex wrap">
            <div>
              <a href="/detail/{{$items->id}}"><button type="button" class="btn_d">詳しく見る</button></a>
            </div>
            <div>@auth
              <span>
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
                <div>
                  <a href="/notfavorite/{{$items->id}}" class="">
                    <img src="storage/icon/favo2.svg" class="favo" alt="">
                  </a>
                </div>
                @else
                <div>
                  <a href="/favorite/{{$items->id}}" class="">
                    <img src="storage/icon/favo.svg" class="favo" alt="">
                  </a>
                </div>
                @endif
              </span>
              @endauth
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection