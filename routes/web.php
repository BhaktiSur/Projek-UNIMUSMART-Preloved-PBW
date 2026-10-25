<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/index');

Route::view('/index', 'index');
Route::view('/login', 'login');
Route::view('/register', 'register');

Route::view('/katalog', 'katalog');
Route::view('/detailbarang', 'detailbarang');
Route::view('/jual', 'jual');

Route::view('/profil', 'profil');
Route::view('/transaksi', 'transaksi');

Route::view('/bantuan', 'bantuan');