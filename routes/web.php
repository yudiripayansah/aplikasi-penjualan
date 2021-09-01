<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/Products', [ProductsController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/form/{mode}', [UserController::class, 'form']);

Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/form/{mode}', [ProductsController::class, 'form']);

Route::post('/products/store', [ProductsController::class, 'store']);
Route::get('/products/edit/{id}', [ProductsController::class, 'edit']);
Route::put('/products/update/{id}', [ProductsController::class, 'update']);