<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/all','App\Http\Controllers\ProductController@showAll');
Route::get('/add','App\Http\Controllers\ProductController@add_product');
Route::get('/{id}','App\Http\Controllers\ProductController@showOne');
