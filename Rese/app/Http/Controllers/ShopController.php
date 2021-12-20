<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Reserve;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index(Shop $shop, Request $request)
    {
        $shop_area = $request->input('shop_area');
        $shop_genre = $request->input('shop_genre');
        $shop_name = $request->input('shop_name');

        $query = Shop::query();

        if (!empty($shop_area) === '') {
            $query->whereNull('shop_area');
        } else {
            $query->where('shop_area', 'LIKE', '%' . $shop_area . '%');
        }

        if (!empty($shop_genre) === '') {
            $query->whereNull('shop_genre');
        } else {
            $query->where('shop_genre', 'LIKE', '%' . $shop_genre . '%');
        }

        if (!empty($freetext) === '') {
            $query->whereNull('shop_name');
        } else {
            $query->where('shop_name', 'LIKE', '%' . $shop_name . '%');
        }

        $shops = $query->get();

        return view('rese.index', ['shops' => $shops]);
    }


    public function detail($id)
    {
        $shop_detail = shop::find($id);
        return view('rese.detail', compact('shop_detail'));
    }
}
