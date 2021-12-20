<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'shop_name', 'shop_area', 'shop_genre', 'shop_summary', 'created_at', 'updated_at'];

    public function reserve()
    {
        return $this->hasMany('App\Models\Reserve');
    }

    public function favorite()
    {
        return $this->hasMany('App\Models\Favorite');
    }
}
