<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\Purchase_itemsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index']);
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/orders', [OrdersController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/suppliers', [SuppliersController::class, 'index']);
Route::get('/purchases', [PurchasesController::class, 'index']);
Route::get('/purchase_items', [Purchase_itemsController::class, 'index']);
Route::get('/menu/form/{mode}/{id?}', [MenuController::class, 'form']);
Route::get('/user/form/{mode}/{id?}', [UserController::class, 'form']);
Route::post('/menu/save', [MenuController::class, 'save']);
Route::post('/user/save', [UserController::class, 'save']);
Route::post('/menu/delete', [MenuController::class, 'delete']);
Route::post('/user/delete', [UserController::class, 'delete']);
