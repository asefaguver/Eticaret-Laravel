<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopcartController;
use App\Http\Controllers\OrderController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [HomeController::class, 'shop']);
Route::get('/{category}/kategoriler',[Homecontroller::class,'show']);
Route::get('/{product}/urun-detay',[Homecontroller::class,'urunDetay']);

Route::get('/admindashboard', [AdminController::class, 'index']);
Route::post('/getproduct',[Homecontroller::class,'getproduct'])->name('getproduct');



Route::group(['middleware' => 'auth'], function () {
    
    //Product tablosunun route yapısı
    Route::get('/product',[ProductController::class,'index']);
    Route::get('/products/create',[ProductController::class,'create']);
    Route::post('/products',[ProductController::class,'store'])->name('pro-store');
    Route::get('/products/{id}/edit',[ProductController::class,'edit']);
    Route::get('/products/{id}/delete',[ProductController::class,'destroy'])->name('pro-delete');
    Route::post('/products/{id}',[ProductController::class,'update']);

    //Category tablosunun route yapısı
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/categories/create', [CategoryController::class, 'create']);
    Route::post('/categories',[CategoryController::class,'store'])->name('cat-store');
    Route::get('/categories/{id}/delete',[CategoryController::class,'destroy'])->name('cat-delete');
    Route::get('/categories/{id}/edit',[CategoryController::class,'edit']);
    Route::put('/categories/{id}',[CategoryController::class,'update']);

    //Shopcart tablosu
    Route::get('/cart',[ShopcartController::class,'index']);
    Route::post('/{id}/store',[ShopcartController::class,'store'])->name('shopcart-store');
    Route::get('/{id}/delete',[ShopcartController::class,'destroy'])->name('shopcart-delete');
    Route::post('/{id}',[ShopcartController::class,'update'])->name('shopcart-update');

    //Order tablosunun route yapısı
    Route::get('/order',[OrderController::class,'index'])->name('user_orders');
    Route::post('/order/create',[OrderController::class,'create'])->name('order-add');
    Route::post('/order/ekle',[OrderController::class,'store'])->name('order-store');
    Route::get('/orders/{id}/edit',[OrderController::class,'edit']);
    Route::get('/orders/{id}/delete',[OrderController::class,'destroy'])->name('order-delete');
    Route::post('/orders/{id}',[OrderController::class,'update']);

    Route::get('/userprofile',[HomeController::class,'profile']);
});