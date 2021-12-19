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
          <form action="" method="post">
            @csrf
            <input type="button" type="submit" value="×">
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
          @endforeach
        </table>
        <div>
          予約変更
        </div>
      </div>
      <div>
        お気に入り
      </div>
    </div>
  </div>
</div>
@endsection