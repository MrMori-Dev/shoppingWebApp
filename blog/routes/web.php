<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'/product'],function (){

    Route::get('/all', 'App\Http\Controllers\ProductController@showAll');
    Route::get('/add','App\Http\Controllers\ProductController@add_product');
    Route::get('/{id}', 'App\Http\Controllers\ProductController@showOne');
    Route::get('/addNew','App\Http\Controllers\ProductController@insert');
});
Route::group(['prefix'=>'/user'],function (){
    Route::get('/create',function (){ return view('createNewUser'); });
    Route::post('/addNewUser',[UserController::class, 'createNewUser'])->name("user.create");
//    Route::post('addNewUser','UserController@createNewUser')->name('user.create');
});
