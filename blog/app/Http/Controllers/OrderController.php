<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function insert()
    {
        echo 1;
    }

    public function showOne($id)
    {
        return Order::getOne($id);
    }

    public function showAll()
    {
        $data = Order::getAll();
        return view('fetchAllProduct');
    }

    function createNewOrder(Request $request){
//        $data = $request->all();
//        Order::addNewOrder($data['user_id'],
//            $data['address_id'],
//            $data['coupon_id'],
//            $data['status'],
//            $data['total_amount'],
//            $data['delivery_amount'],
//            $data['coupon_amount'],
//            $data['paying_amount'],
//            $data['paying_type'],
//            $data['payment_status'],
//            $data['description']);
//        echo "<script> alert('successful');</script>";
        Order::
    }
}
