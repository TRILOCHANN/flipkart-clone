<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class, 'login'])->name('Loginpage');
Route::get('/registration/page', [AuthController::class, 'register'])->name('RegistrationPage');
Route::get('/become/seller',[AuthController::class,'sellerLogin'])->name('Sellerlogin');
Route::get('/become/seller/register',[AuthController::class,'sellerRegister'])->name('SellerRegisterPage');
Route::get('nocart',[AuthController::class,'Nocart'])->name('Nocart');
Route::post('/registration/data', [AuthController::class, 'Registorhandel'])->name('Registerhandel');
Route::post('/login/data', [AuthController::class, 'Loginhandel'])->name('Loginhandel');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/seller', [SellerController::class, 'index']);
// Route::get('/seller/login', [SellerController::class, 'login']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
