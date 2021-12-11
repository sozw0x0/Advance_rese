@extends('/rese/layouts/main')

@section('title', '店舗ページ')
@section('main')

<div>
  <div>
    <nav>検索フォーム</nav>
  </div>
  <div>店舗ページ
    <div class="card_group">
      @foreach ($shops as $items)
      <div class="card_item">
        <p>
          <img src="storage/images/shop_{{$items->shop_id}}.jpg" class=" card_img">
        </p>
        <div class="card_content">
          <h2 class="card-ttl">店の名前{{$items->shop_name}}</h2>
          <div>
            <p><span>タグ{{$items->shop_area}}</span><span>タグ{{$items->shop_genre}}</span></p>
          </div>
          <div>
            <a href="/detail/{{$items->shop_id}}"><button type="button">詳しく見る</button></a>
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