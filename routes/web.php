<?php

use App\Http\Controllers\ApiController;
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
    return view('home');
});
Route::get('/detail', function () {
    return view('detail_product');
});
Route::get('/detail_transaction', function () {
    return view('detail_transaction');
});
Route::get('/reseller', function () {
    return view('register_reseller');
});
Route::get('/user', function () {
    return view('register_user');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/terms_condition', function () {
    return view('terms_condition');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/razer', function () {
    return view('razer');
});
