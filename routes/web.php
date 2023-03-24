<?php

use App\Http\Controllers\KatalogController;
use App\Http\Controllers\ProductController;
use App\Models\Cart;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('product.add', [ProductController::class, 'create']);

Route::get('/product/{id}/edit', [ProductController::class, 'edit']);

Route::get('/product/{id}/delete', [ProductController::class, 'destroy']);

Route::post('/product', [ProductController::class, 'store' ]);

Route::put('/product/{id}', [ProductController::class, 'update']);

Route::resource('/katalog', KatalogController::class);

Route::get('/cart', []);

Route::get('/cart', function () {
    return view('cart.index', [
        'carts' => Cart::all(),
    ]);
});

Route::get('/list', function () {
    return view('list.index');
});
