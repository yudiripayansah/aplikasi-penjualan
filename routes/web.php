<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;


Route::get('/', [DashboardController::class, 'index']);
Route::get('/Products', [ProductsController::class, 'index']);
