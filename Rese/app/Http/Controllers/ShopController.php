<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ShopController extends Controller
{
    public function index()
    {

        return view('rese.index');
    }

    public function detail()
    {
        return view('rese.index');
    }
}
