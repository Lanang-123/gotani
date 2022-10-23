<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProductController;
use GuzzleHttp\Psr7\Request;
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

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'getAll'])->name('category.getAll');
    Route::get('/category/{id}', [CategoryController::class, 'getById'])->name('category.getById');
    Route::post('/search', [CategoryController::class, 'search'])->name('category.search');


    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::post('/update/{users:user}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete/{users:user}', [CategoryController::class, 'destroy'])->name('category.destroy');
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'getAll'])->name('product.getAll');
    Route::get('/product/{id}', [ProductController::class, 'getById'])->name('product.getById');
    Route::post('/search', [ProductController::class, 'search'])->name('product.search');
    Route::get('/category/{categories:category}', [ProductController::class, 'getByCategory'])->name('product.getByCategory');
    Route::get('/user/{users:user}', [ProductController::class, 'getByUser'])->name('product.getByUser');

    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::post('/update/{users:user}', [ProductController::class, 'update'])->name('product.update');
    Route::post('/destroy/{users:user}', [ProductController::class, 'destroy'])->name('product.destroy');
});

Route::prefix('keranjang')->group(function () {
    Route::post('/insertToChart', [KeranjangController::class, 'insertToChart'])->name('product.insertToChart');
    Route::get('/getChart', [KeranjangController::class, 'getChart'])->name('product.getChart');
    Route::post('/updateChart/{users:user}', [KeranjangController::class, 'updateChart'])->name('product.updateChart');
    Route::post('/deleteChart', [KeranjangController::class, 'deleteChart'])->name('product.deleteChart');
});
