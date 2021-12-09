@extends('/rese/layouts/main')

@section('title', '店舗ページ')
@section('content')

<div>
  @if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
    @endif
    @endauth
  </div>
  @endif
  <div>
    <nav>検索フォーム</nav>
  </div>
  <div>店舗ページ
    <div>店舗一覧
      @foreach ($shops as $items)
      <div>単体
        <div>
          <p>
            <img src="storage/images/shop_{{$items->shop_id}}.jpg">
          </p>
          <h2>店の名前{{$items->shop_name}}</h2>
          <p><span>タグ{{$items->shop_area}}</span><span>タグ{{$items->shop_genre}}</span></p>
          <form action="">
            @csrf
            <input type="button" value="詳しく見る">
          </form>
          <div>
            <form action="">
              @csrf
              <input type="button" value="お気に入り">
            </form>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @endsection
