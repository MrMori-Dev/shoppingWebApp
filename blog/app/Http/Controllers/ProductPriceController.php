<?php

namespace App\Http\Controllers;

use App\Models\ProductPrice;
use Illuminate\Http\Request;

class ProductPriceController extends Controller
{
    function createNewProductPrice($request){
        $data = $request->all();
        ProductPrice::addNewProductPrice();
    }
}
