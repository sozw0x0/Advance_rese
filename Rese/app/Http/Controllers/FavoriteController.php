<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function favorite(Request $request)
    {
        $favorite = new Favorite();
        $favorite->shop_id = $request->shop_id;
        $favorite->user_id = Auth::user()->id;
        $favorite->save();

        return redirect()->route('rese.index', [$request->shop_id]);
    }

    public function notfavorite(Request $request, $id)
    {
        Favorite::find($request->id)->delete();
        return redirect()->route('rese.index');
    }
}
