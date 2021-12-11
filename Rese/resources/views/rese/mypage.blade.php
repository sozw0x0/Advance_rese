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
    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <a href="route('logout')" onclick="event.preventDefault();
        this.closest('form').submit();">
        Logout</a>
    </form>
  </div>
</div>
@endsection