<?php

use Illuminate\Support\Facades\Route;

// Mengatur agar halaman utama (/) menampilkan file login
Route::get('/', function () {
    return view('login/login');
}) -> name('login');

// Mengatur agar halaman /register menampilkan file register
Route::get('/register', function () {
    return view('login/register');
}) -> name('register');

Route::get('/pengalaman', function () {
    return view('layouts/pengalaman');
})->name('pengalaman');

Route::get('/edukasi', function () {
    return view('layouts/edukasi');
})->name('edukasi');

Route::get('/ceritakan', function () {
    return view('layouts/ceritakan');
})->name('ceritakan');