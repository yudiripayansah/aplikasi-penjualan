<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PurchaseItemsController;
use App\Http\Controllers\UserController;

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
Route::get('/purchaseitems', [PurchaseItemsController::class, 'index']);
Route::get('/purchaseitems/form/{mode}/{id?}', [PurchaseItemsController::class, 'form']);
Route::post('/purchaseitems/store', [PurchaseItemsController::class, 'store']);
Route::post('/purchaseitems/delete', [PurchaseItemsController::class, 'delete']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/form/{mode}/{id?}', [UserController::class, 'form']);
Route::post('/user/save', [UserController::class, 'save']);
Route::post('/user/delete', [UserController::class, 'delete']);

Route::get('/pos', [PosController::class, 'index']);
