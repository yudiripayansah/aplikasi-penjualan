
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuppliersController;


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
Route::get('/suppliers', [SuppliersController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/form/{mode}/{id?}', [UserController::class, 'form']);
Route::get('/suppliers/form/{mode}/{id?}', [SuppliersController::class, 'form']);
Route::post('/user/save', [UserController::class, 'save']);
Route::post('/suppliers/save', [SuppliersController::class, 'save']);
Route::post('/user/delete', [UserController::class, 'delete']);
Route::post('/suppliers/delete', [SuppliersController::class, 'delete']);
