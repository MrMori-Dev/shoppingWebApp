<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    public static function addNewProductAttribute ($productID,$attribute, $value, $description){
        self::query()->create(['product_id'=>$productID,'attribute'=>$attribute,'value'=>$value,'description'=>$description]);
    }
}
