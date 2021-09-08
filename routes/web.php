<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/Products', [ProductsController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/form/{mode}/{id?}', [UserController::class, 'form']);
Route::post('/user/save', [UserController::class, 'save']);
Route::post('/user/delete', [UserController::class, 'delete']);

Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/form/{mode}/{id?}', [ProductsController::class, 'form']);
Route::post('/products/save', [ProductsController::class, 'save']);
Route::post('/products/delete', [ProductsController::class, 'delete']);
