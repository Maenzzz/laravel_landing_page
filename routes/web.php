<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produk_ctr;
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


// Route::get('uji_model', [get_data_model::class, 'indexes']);

// Route::view('u_input', 'inputan');
// Route::post('inputannya', [uji_inputan::class, 'indexes']);
 Route::view('landing_page', 'landing');
 Route::get('landing', [produk_ctr::class, 'index']);
 Route::view('beli_page', 'beli');
 Route::get('beli', [produk_ctr::class, 'index2']);
 Route::get('product/{kode}', [produk_ctr::class, 'productDetails'])->name('product.details');

  Route::view('home', 'home_page');