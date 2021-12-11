@extends('/rese/layouts/main')

@section('title', '店舗ページ')
@section('main')
<p>店舗詳細</p>

<div>
  <p>
    <img src="/storage/images/shop_{{$shop_detail->shop_id}}.jpg" class=" card_img">
  </p>
  <h2>店の名前{{$shop_detail->shop_name}}</h2>
  <p><span>タグ{{$shop_detail->shop_area}}</span><span>タグ{{$shop_detail->shop_genre}}</span></p>

</div>
@endsection