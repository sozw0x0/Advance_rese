<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\RegisterController;


Route::get('/', [ShopController::class, 'index'])->name('shop.index');
//TOPページ
Route::get('/detail/{shop_id}', [ShopController::class, 'detail'])->name('shop.detail');
//商品ページ詳細

Route::get('/mypage', [MypageController::class, 'show'])->name('maypage.index');

require __DIR__.'/auth.php';
