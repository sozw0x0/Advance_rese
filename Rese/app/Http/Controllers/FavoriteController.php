<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function favorite(Request $request, $id)
    {
        $favorite = new Favorite();
        $favorite->shop_id = $id;
        $favorite->user_id = Auth::id();
        $favorite->save();

        return back();
    }

    public function notfavorite(Request $request, $id)
    {
        $favorite = Favorite::where('shop_id', $id)->where('user_id', Auth::id())->first();
        $favorite->delete();
        return back();
    }
}
