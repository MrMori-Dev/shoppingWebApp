<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/home'], function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::group(['prefix' => '/products'], function () {

        Route::get('/all',[\App\Http\Controllers\ProductController::class, 'showAll']);

        Route::get('/create', function () {
            return view('addProduct');
        });
        Route::post('/addNewProduct', [ProductController::class, 'createNewProduct'])->name("product.create");
    });
    Route::group(['prefix' => '/users'], function () {

        Route::get('/create', function () {
            return view('createNewUser');
        });
        Route::post('/addNewUser', [UserController::class, 'createNewUser'])->name("user.create");
    });
    Route::group(['prefix' => '/orders'], function () {
        Route::post('/create', [\App\Http\Controllers\OrderController::class, 'createNewOrder']);
    });
    Route::group(['prefix' => '/orderItems'], function () {

        Route::get('/all',[\App\Http\Controllers\OrderItemsController::class,'showAll']);
        Route::post('/create', [UserController::class, 'createNewUser'])->name("user.create");
        Route::get('/add/{id}',[\App\Http\Controllers\OrderItemsController::class,'add']);
    });
});
