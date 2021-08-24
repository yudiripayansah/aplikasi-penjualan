<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/Products', [ProductsController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/form/{mode}', [UserController::class, 'form']);
