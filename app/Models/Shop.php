<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function area()
    {
        // Shopに紐づくAreaを取得する（親を参照する）
        return $this->belongsTo(Area::class);
    }

    public function routes()
    {
        // 中間テーブルを呼び出す
        return $this->belongsToMany(Route::class);
    }
}
