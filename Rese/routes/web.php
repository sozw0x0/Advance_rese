<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\FavoriteController;

Route::get('/register', [RegisteredUserController::class, 'create'])
  ->middleware('guest')
  ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
  ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
  ->middleware('guest')
  ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
  ->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
  ->middleware('auth')
  ->name('logout');

Route::get('/', [ShopController::class, 'index'])->name('shop.index');

Route::get('/detail/{shop_id}', [ShopController::class, 'detail'])->name('shop.detail');

Route::get('/thanx', [RegisterController::class, 'thanx'])->name('rese.thanx');

Route::get('/mypage', [MypageController::class, 'show'])->middleware('auth')->name('maypage.index');

Route::group(['prefix' => '/reserve', 'middleware' => 'auth'], function () {
  Route::post('/create', [Reservecontroller::class, 'create']);
  Route::post('/edit/{id?}', [Reservecontroller::class, 'edit']);
  Route::post('/update/{id?}', [Reservecontroller::class, 'update']);
  Route::post('/delete/{id?}', [Reservecontroller::class, 'delete']);
});

Route::get('/done', [ReserveController::class, 'done'])->middleware('auth')->name('done');

Route::get('/favorite/{id?}', [FavoriteController::class, 'favorite'])->name('favorite');
Route::get('/notfavorite/{id?}', [FavoriteController::class, 'notfavorite'])->name('notfavorite');

require __DIR__.'/auth.php';
