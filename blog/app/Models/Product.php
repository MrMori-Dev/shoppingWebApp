<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title'
    ];
//    protected $table = 'product';
    public static function getAll() {
        return self::query()->get();
    }
    public static function getOne($id){
        return self::query()->find($id,['*']);
    }

    public static function addNewProduct ($title){
        self::query()->create(['title'=>$title]);
//        self::saved();
    }

}
