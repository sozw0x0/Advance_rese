<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $primaryKey = 'shop_id';

    protected $fillable = ['shop_name', 'shop_area', 'shop_genre', 'shop_summary', 'created_at', 'update_at'];

    public function user()
    {
        return  $this->belongsTo('App\Models\User');
    }

    public function getData()
    {
        return $this->shop;
    }
}
