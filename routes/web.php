<?php
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/', [ShopController::class, 'index']);
//
Route::get('/products', [StoreController::class, 'products'])->name('products');
Route::get('/about', [StoreController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/cart', [StoreController::class, 'cart'])->name('cart');
Route::get('/register', [StoreController::class, 'register'])->name('register');


Route::get('/products', [ProductController::class, 'index']);


Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store'])->name('products.store');


Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::put('/products/{id}', [ProductController::class, 'update']);

Route::delete('/products/{id}', [ProductController::class, 'destroy']);
Route::get('/products/{id}/details', [StoreController::class, 'productDetails'])->name('products.details');
Route::get('/products/{id}', [ProductController::class, 'show']);


