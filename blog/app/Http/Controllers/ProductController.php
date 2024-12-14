<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function initializeProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["productName"]) && !empty($_POST["price"]) && !empty($_POST["type"])) {
                $this->productName = $_POST["productName"];
                $this->price = $_POST["price"];
                $this->type = $_POST["type"];
            }
            return true;
        }
        return false;

    }

    public function insert()
    {
        echo 1;
//        Product::addNewProduct('sim');
    }

    public function add_product()
    {
        return view('addProduct');
//        Product::addNewProduct('sim');
    }

    public function showOne($id)
    {
        return Product::getOne($id);

//        $products = \R::findAll('products');
//        foreach ($products as $product) {
//            if ($product['name'] == $name) {
//                return $product;
//            }
//        }

//        return false;
    }

    public function showAll()
    {
        $products = Product::getAll();
        return $products;
    }
}
