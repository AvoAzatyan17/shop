<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('index');
Route::get('/order', [App\Http\Controllers\PageController::class, 'order'])->name('order.index');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route:: post('/cart/store', [App\Http\Controllers\CartController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
