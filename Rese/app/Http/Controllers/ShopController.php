<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('rese.index', ['shops' => $shops]);
    }

    public function detail($id)
    {
        $shop_detail = shop::find($id);
        return view('rese.detail', compact('shop_detail'));
    }
}
