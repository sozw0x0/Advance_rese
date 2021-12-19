<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReserveController extends Controller
{
    public function create(Request $request)
    {
        $reserve =[
            'user_id' => $request->user_id,
            'shop_id' => $request->shop_id,
            'reserve_date' => $request->reserve_date,
            'reserve_time' => $request->reserve_time,
            'reserve_num' => $request->reserve_num,
            'created_at' => now(),
        ];
        DB::table('reserves')->insert($reserve);
        return redirect('/done');
    }

    public function delete(Request $request)
    {
        Reserve::find($request->id)->delete();
        return redirect('mypage');
    }

    public function done()
    {
        return view('rese.done');
    }
}
