<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// 1. HALAMAN UTAMA (Otomatis diarahkan ke halaman login)
Route::get('/', [LoginController::class, 'showLoginForm']);

// 2. HALAMAN PENGGUNA / SISWA (FRONTEND)
// URL dibersihkan menjadi '/pengalaman' saja agar standar Laravel
Route::get('/pengalaman', [ReportController::class, 'index'])->name('pengalaman');

// Tampilan Halaman Edukasi
Route::get('/edukasi', function () {
    return view('layouts/edukasi');
})->name('edukasi');

// Tampilan Halaman Ceritakan (Tempat siswa mengisi form laporan/curhat)
Route::get('/ceritakan', function () {
    return view('layouts/ceritakan'); 
})->name('ceritakan');

// Proses Simpan Laporan dari form siswa ke Database
Route::post('/ceritakan/simpan', [ReportController::class, 'store'])->name('report.store');


// 3. PANEL ADMIN CONTROL (BACKEND)
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

// Route aksi pendukung admin untuk update status, publikasi saklar, dan hapus
Route::put('/admin/report/{id}/status', [AdminController::class, 'updateStatus'])->name('admin.report.status');
Route::put('/admin/report/{id}/publish', [AdminController::class, 'togglePublish'])->name('admin.report.publish');
Route::delete('/admin/report/{id}/delete', [AdminController::class, 'destroy'])->name('admin.report.delete');


// 4. PROSES AUTHENTICATION (Login, Register, Logout)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// 5. like fitur
Route::post('/pengalaman/{id}/like', [ReportController::class, 'like'])->name('report.like');