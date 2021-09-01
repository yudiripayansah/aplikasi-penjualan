<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\controllers\purchasesController;
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
Route::get('/purchases', [purchasesController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/form/{mode}/{id?}', [UserController::class, 'form']);
Route::post('/user/save', [UserController::class, 'save']);
Route::post('/user/delete', [UserController::class, 'delete']);
Route::get('/Purchases/form/{mode}', [PurchasesController::class, 'form']);
