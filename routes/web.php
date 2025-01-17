<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', [LoginController::class, 'showLogin'])->name('show.login');
Route::post('/login', [LoginController::class, 'login'])->name('user.login');
Route::get('/blog', [BlogController::class, 'showBlog'])->name('show.blog');
Route::get('/logout', [LogoutController::class, 'logout'])->name('user.logout');

Route::get('products', [ProductController::class, 'index'])->name('index');
Route::get('products/{id}', [ProductController::class, 'show'])->name('show');
