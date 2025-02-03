<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'product_variations_id',
        'price',
        'quantity',
        'subtotal'
    ];

    public static function getAll()
    {
        return self::query()->get();
    }

    public static function getOne($id)
    {
        return self::query()->find($id, ['*']);
    }

    public static function addNewOrderItems
    (
        $order_id,
        $product_id,
        $product_variations_id,
        $price,
        $quantity,
        $subtotal
    )
    {
        self::query()->create(
            [
                'order_id' => $order_id,
                'product_id' => $product_id,
                'product_variations_id' => $product_variations_id,
                'price' => $price,
                'quantity' => $quantity,
                'subtotal' => $subtotal,
            ]
        );
//        self::saved();
    }
}
