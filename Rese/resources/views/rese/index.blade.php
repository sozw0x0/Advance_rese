@extends('/rese/layouts/main')

@section('title', '店舗ページ')
@section('main')

<div>
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
      <input type="text" name="shop_name" id="" placeholder="Search...">
      <input type="submit" value="">
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
          <div>
            <form action="" method="">
              @csrf
              <input type="button" value="お気に入り">
            </form>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection