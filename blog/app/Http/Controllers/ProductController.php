<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function insert()
    {
        echo 1;
    }

    public function showOne($id)
    {
        return Product::getOne($id);
    }

    public function showAll()
    {
        $data = Product::query()->get();
        return view('fetchAllProduct',['data'=>$data]);
    }

    function createNewProduct(Request $request){
        $data = $request->all();
        Product::addNewProduct($data['productTitle']);
        echo "<script> alert('successful');</script>";
    }
}
