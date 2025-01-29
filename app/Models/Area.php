<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public function shops()
    {
        // Areaに紐づくShopの情報を持ってくる（子を参照する）
        return $this->hasMany(Shop::class);
    }
}
