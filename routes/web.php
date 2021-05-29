<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/// arahkan ke link ini ketika user klik "login with google"
Route::get('auth/google', [App\Http\Controllers\Auth\LoginController::class, 'google']);
/// siapkan route untuk menampung callback dari google
Route::get('auth/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'google_callback']);

Route::get('/kebijakan-privasi', function() {
    echo "Halaman kebijakan privasi";
});
Route::get('/ketentuan-layanan', function() {
    echo "Halaman kebijakan privasi";
});
Route::get('/hapus-akun-facebook', function() {
    echo "Halaman hapus akun facebook";
});