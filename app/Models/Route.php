<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    public function shops()
    {
        // 中間テーブルを呼び出す
        return $this->belongsToMany(Shop::class);
    }
}
