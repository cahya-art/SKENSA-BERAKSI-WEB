<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

// Mengatur agar halaman utama (/) menampilkan file login
Route::get('/', function () {
    return view('login/login');
}) -> name('login');

// Mengatur agar halaman /register menampilkan file register
Route::get('/register', function () {
    return view('login/register');
}) -> name('register');

Route::get('layouts/pengalaman', [ReportController::class, 'index'])->name('pengalaman');

Route::get('/edukasi', function () {
    return view('layouts/edukasi');
})->name('edukasi');

Route::get('/ceritakan', function () {
    return view('layouts/ceritakan');
})->name('ceritakan');

Route::post('/ceritakan/simpan', [ReportController::class, 'store'])->name('report.store');