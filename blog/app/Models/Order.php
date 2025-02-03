<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'address_id',
        'coupon_id',
        'status',
        'total_amount',
        'delivery_amount',
        'coupon_amount',
        'paying_amount',
        'paying_type',
        'payment_status',
        'description',
    ];

    public static function getAll()
    {
        return self::query()->get();
    }

    public static function getOne($id)
    {
        return self::query()->find($id, ['*']);
    }

    public static function addNewOrder
    (
        $user_id,
        $address_id,
        $coupon_id,
        $status,
        $total_amount,
        $delivery_amount,
        $coupon_amount,
        $paying_amount,
        $paying_type,
        $payment_status,
        $description
    )
    {
        self::query()->create(
            [
                'user_id' => $user_id,
                'address_id' => $address_id,
                'coupon_id' => $coupon_id,
                'status' => $status,
                'total_amount' => $total_amount,
                'delivery_amount' => $delivery_amount,
                'coupon_amount' => $coupon_amount,
                'paying_amount' => $paying_amount,
                'paying_type' => $paying_type,
                'payment_status' => $payment_status,
                'description' => $description,
            ]
        );
//        self::saved();
    }
//    function add(){
//        self::query()->create(
//            [
//                'user_id' => 'null',
//                'address_id' => 'null',
//                'coupon_id' => 'null',
//                'status' => $status,
//                'total_amount' => $total_amount,
//                'delivery_amount' => $delivery_amount,
//                'coupon_amount' => $coupon_amount,
//                'paying_amount' => $paying_amount,
//                'paying_type' => $paying_type,
//                'payment_status' => $payment_status,
//                'description' => $description,
//            ]
//        );
//    }
}
