<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\RegisterController;

Route::get('/', [ShopController::class, 'index'])->name('shop.index');
//TOPページ
Route::get('/detail/{shop_id}', [ShopController::class, 'detail'])->name('shop.detail');
//商品ページ詳細

Route::get('/register', [RegisterController::class, 'register'])->name('register');
//新規登録ページ

Route::post('/register', [RegisterController::class, 'create'])->name('create');
//登録

Route::get('/thanx', [RegisterController::class, 'thanx'])->name('thanx');
