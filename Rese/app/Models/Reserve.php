<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['reserve_date', 'reserve_time', 'reserve_num', 'created_at', 'updated_at'];

    public function user()
    {
        return  $this->belongsTo('App\Models\User');
    }
}
