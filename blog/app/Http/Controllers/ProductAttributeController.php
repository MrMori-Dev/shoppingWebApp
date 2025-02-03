<?php

namespace App\Http\Controllers;

use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class ProductAttributeController extends Controller
{
    function createNewProductAttribute($request){
        $data = $request->all();
        ProductAttribute::addNewProductAttribute($data['product_id'], $data['attribute'], $data['value'], $data['description']);
    }
}
