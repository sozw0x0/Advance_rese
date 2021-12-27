<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Reserve;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function show(Request $request)
    {
        $id = Auth::id();
        $items =Reserve::where('user_id', $id)->get();
        $favoriteLists = Favorite::where('user_id', $id)->get();
        $shops = shop::all();

        $shopIds = array();
        foreach ($shops as $shop) {
            array_push($shopIds, $shop->id);
        }

        $favorites = Favorite::whereIn('shop_id', $shopIds)->where('user_id', Auth::id())->get();
        
        return view('rese.mypage', compact( 'items', 'favoriteLists', 'favorites'));
    }
}
