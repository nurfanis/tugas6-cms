<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CategoryController;


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

Route::view('/', 'pages.home');
Route::view('/login', 'login.index')->name('login');

Route::resource('/category', CategoryController::class);
Route::resource('/produk', ProdukController::class);

Route::get('/home', function () {
    return view('pages.home');
});

// Auth route
Route::get('/register', [LoginController::class, "register"])->name('register');
Route::post('/register-user', [LoginController::class, "doRegister"])->name('do.register');

Route::post('/login', [LoginController::class, "doLogin"])->name('do.login');
Route::get('/logout', [LoginController::class, "logout"])->name('logout');
// upload ke repo