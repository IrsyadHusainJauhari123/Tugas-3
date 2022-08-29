<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FontController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;


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
    return view('fontend.welcome');
});

Route::get('/checkout', [FontController::class, 'showcheckout']);
Route::get('/cart', [FontController::class, 'showacart']);
Route::get('/about', [FontController::class, 'showabout']);
Route::get('/shop', [FontController::class, 'showshop']);
Route::get('/home', [FontController::class, 'showhome']);
Route::get('/contact', [FontController::class, 'showcontact']);
Route::get('/single', [FontController::class, 'showsingle']);





Route::get('template', function () {
    return view('template.base');
});


Route::get('/beranda', [HomeController::class, 'showberanda']);
Route::get('/kategori', [HomeController::class, 'showkategori']);
Route::get('/pelanggan', [HomeController::class, 'showpelanggan']);
Route::get('/suppliyer', [HomeController::class, 'showsuppliyer']);



Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk', [ProdukController::class, 'store']);
Route::get('/produk/{produk}', [ProdukController::class, 'show']);
Route::get('/produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('/produk/{produk}', [ProdukController::class, 'update']);
Route::delete('/produk/{produk}', [ProdukController::class, 'destroy']);


Route::get('/login', [AuthController::class, 'showlogin']);
