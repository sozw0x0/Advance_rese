<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $item =Reserve::where('user_id', $id)->get();
        return view('rese/mypage', compact('reserved'));
    }
}
