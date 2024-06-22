<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::controller(OrderController::class)->group(function(){
    Route::get('orders','index');
    Route::get('orders/{id}','show');
    Route::post('orders/{id}','store');
    Route::put('orders/{id}','update');
    Route::delete('orders/{id}','delete');
});