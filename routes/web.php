<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
Route::redirect('/', '/index');

Route::view('/index', 'index');
Route::view('/login', 'login');
Route::view('/register', 'register');

Route::get('/katalog', [BarangController::class, 'katalog']);

Route::view('/detailbarang', 'detailbarang');
Route::view('/jual', 'jual');

Route::view('/profil', 'profil');
Route::view('/transaksi', 'transaksi');

Route::view('/bantuan', 'bantuan');