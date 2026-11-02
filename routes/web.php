<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::redirect('/', '/index');

Route::get('/index', [BarangController::class, 'beranda']);

Route::view('/login', 'login');
Route::view('/register', 'register');

Route::get('/katalog', [BarangController::class, 'katalog'])
    ->name('barang.katalog');

Route::get('/detailbarang/{id}', [BarangController::class, 'detail'])
    ->name('barang.detail');

Route::view('/jual', 'jual');
Route::view('/profil', 'profil');
Route::view('/transaksi', 'transaksi');
Route::view('/bantuan', 'bantuan');
