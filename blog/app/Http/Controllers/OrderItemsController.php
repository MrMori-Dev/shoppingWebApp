<?php

namespace App\Http\Controllers;

use App\Models\OrderItems;
use Illuminate\Http\Request;

class OrderItemsController extends Controller
{
    public function insert()
    {
        echo 1;
    }

    public function showOne($id)
    {
        return OrderItems::getOne($id);
    }

    public function showAll()
    {
        $data = OrderItems::query()->get();
        return view('fetchAllOrderItems',['data'=>$data]);
    }

    function createNewProduct(Request $request){
        $data = $request->all();

        OrderItems::addNewOrderItems(
            $data['order_id'],
            $data['product_id'],
            $data['product_variation_id'],
            $data['price'],
            $data['quantity'],
            $data['subtotal']
        );
        echo "<script> alert('successful');</script>";
    }
    function add($productID){

        OrderItems::addNewOrderItems(
            0,
            $productID,
            'normal',
            100,
            0,
            0
        );
        echo "<script> alert('successful');</script>";
    }
}
