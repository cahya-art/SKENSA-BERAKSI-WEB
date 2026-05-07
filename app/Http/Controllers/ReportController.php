<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi data (Penting biar database gak error kalau input kosong)
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'kategori' => 'required',
            'cerita' => 'required', // Ini sesuai dengan 'name' di textarea form kamu
        ]);

        // 2. Simpan ke Database
        Report::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'isi_cerita' => $request->cerita,
            'is_anonymous' => $request->has('is_anonymous'), // Cek apakah checkbox dicentang
        ]);

        // 3. Kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Cerita kamu berhasil dikirim secara aman!');
    }

    public function index()
    {
        // Mengambil semua data reports, urutkan dari yang terbaru
        $reports = Report::orderBy('created_at', 'desc')->get();

        // Kirim data $reports ke file view pengalaman
        return view('layouts/pengalaman', compact('reports'));
    }
}