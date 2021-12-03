<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
