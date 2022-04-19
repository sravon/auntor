<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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


Route::get('/',  [HomeController::class, 'homePage'])->name('home');
Route::post('/search',  [HomeController::class, 'searchTerm'])->name('searchresult');

Route::get('/login', function () {
    return view('login');
})->name('userlogin');

Route::post('/login',  [UserController::class, 'login'])->name('logindata');
Route::get('/addtocart',  [HomeController::class, 'addtocart'])->name('addtocart');

Route::get('/cart',  [HomeController::class, 'cart'])->name('art');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/registerpost',  [UserController::class, 'register'])->name('registerdata');

// Route::get('/cart', function () {
//     return view('cart');
// })->name('cart');

