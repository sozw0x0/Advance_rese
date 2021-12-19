<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'reserve_date', 'reserve_time', 'reserve_num', 'created_at', 'updated_at'];
}
