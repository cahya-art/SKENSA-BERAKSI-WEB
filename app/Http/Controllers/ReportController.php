<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi input judul dan isi cerita
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_cerita' => 'required|string',
        ]);

        // 2. Simpan ke database dengan mengikat ID siswa yang sedang login
        Report::create([
            'judul' => $request->judul,
            'isi_cerita' => $request->isi_cerita,
            'is_anonymous' => 1, // Di halaman publik tetap terkunci sebagai anonim
            'user_id' => auth()->id(), // Merekam ID siswa yang login agar bisa dilihat Super Admin
        ]);

        // 3. Alihkan kembali dengan alert sukses
        return redirect()->route('ceritakan')->with('success', 'Laporanmu berhasil dikirim secara aman dan sedang di tinjau oleh pihak admin, silahkan tunggu dipublikasikan.');
    }

    /**
     * Fungsi index dengan logika pendeteksi Filter URL (?filter=populer)
     */
    public function index(Request $request)
    {
        // Base query: HANYA mengambil laporan yang status is_published bernilai benar/1
        $query = Report::where('is_published', true);

        // Cek parameter filter di URL (?filter=populer)
        if ($request->get('filter') === 'populer') {
            // Urutkan berdasarkan jumlah like terbanyak untuk menu "Populer"
            $query->orderBy('likes_count', 'desc');
        } else {
            // Default atau menu "Semua Cerita": Urutkan berdasarkan tanggal terbaru
            $query->orderBy('created_at', 'desc');
        }

        // Ambil datanya
        $publishedReports = $query->get();

        // Lempar data ke halaman pengalaman siswa
        return view('layouts.pengalaman', compact('publishedReports'));
    }

    /**
     * BARU & AMAN: Menangani klik Tombol Like dengan proteksi Session (1x Like per cerita)
     */
    public function like($id)
    {
        // 1. Ambil array ID laporan yang sudah pernah di-like dari session browser.
        // Jika belum ada data session, set sebagai array kosong []
        $likedReports = session()->get('liked_reports', []);

        // 2. Cek apakah ID laporan ini sudah ada di dalam array session tersebut
        if (in_array($id, $likedReports)) {
            // Jika sudah pernah di-like, langsung kembalikan tanpa menambah nilai (+0)
            return back()->with('info', 'Kamu sudah memberikan dukungan pada cerita ini.');
        }

        // 3. Jika belum pernah di-like, cari data laporan berdasarkan ID
        $report = Report::findOrFail($id);
        
        // 4. Naikkan nilai kolom likes_count sebanyak +1
        $report->increment('likes_count');

        // 5. Masukkan ID laporan ini ke dalam catatan session browser
        $likedReports[] = $id;
        session()->put('liked_reports', $likedReports);

        // 6. Kembali ke halaman sebelumnya dengan perubahan terbaru
        return back();
    }
}