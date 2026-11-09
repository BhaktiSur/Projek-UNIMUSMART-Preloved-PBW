<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AuthController;

Route::redirect('/', '/index');

Route::get('/index', [BarangController::class, 'beranda']);

// REGISTER
Route::view('/register', 'register')->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.store');

// LOGIN
Route::view('/login', 'login')->name('login');

// KATALOG
Route::get('/katalog', [BarangController::class, 'katalog'])
    ->name('barang.katalog');

Route::get('/detailbarang/{id}', [BarangController::class, 'detail'])
    ->name('barang.detail');

// MENU LAINNYA
Route::view('/jual', 'jual');
Route::view('/profil', 'profil');
Route::view('/transaksi', 'transaksi');
Route::view('/bantuan', 'bantuan');
