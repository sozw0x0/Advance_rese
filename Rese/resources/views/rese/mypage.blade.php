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
  </div>
</div>
@endsection