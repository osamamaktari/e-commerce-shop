<?php
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ContactController;
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
