<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('auth/facebook', [App\Http\Controllers\Auth\LoginController::class, 'facebook']);
Route::get('auth/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'facebook_callback']);
Route::get('/kebijakan-privasi', function() {
    echo "Halaman kebijakan privasi";
});
Route::get('/ketentuan-layanan', function() {
    echo "Halaman kebijakan privasi";
});
Route::get('/hapus-akun-facebook', function() {
    echo "Halaman hapus akun facebook";
});