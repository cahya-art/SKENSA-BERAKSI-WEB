<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Mengambil semua laporan beserta data user/siswa yang melapor
        // Sesuaikan 'user' dengan nama fungsi relasi yang ada di Model Report kamu
        $reports = Report::with('user')->orderBy('created_at', 'desc')->get();

        // Hitung statistik untuk kartu dashboard
        $totalLaporan = $reports->count();
        $belumDitangani = $reports->where('status', 'Belum Ditangani')->count();
        $sedangDitangani = $reports->where('status', 'Sedang Ditangani')->count();
        $selesai = $reports->where('status', 'Selesai')->count();

        return view('admin.dashboard', compact('reports', 'totalLaporan', 'belumDitangani', 'sedangDitangani', 'selesai'));
    }

    // Mengubah Status Laporan (Belum Ditangani / Sedang Ditangani / Selesai)
    public function updateStatus(Request $request, $id)
    {
        $report = Report::findOrFail($id);
        $report->update([
            'status' => $request->status
        ]);

        return redirect()->back()->with('success', 'Status laporan #' . $id . ' berhasil diperbarui!');
    }

    // Mengubah Toggle Publikasi (Aktifkan agar muncul di halaman pengalaman)
    public function togglePublish($id)
    {
        $report = Report::findOrFail($id);

        // Membalikkan status publikasi (jika 1 jadi 0, jika 0 jadi 1)
        $report->is_published = !$report->is_published;
        $report->save();

        return back()->with('success', 'Status publikasi laporan #' . $report->id . ' berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $report = Report::findOrFail($id);
        $report->delete();

        return redirect()->back()->with('success', 'Laporan berhasil dihapus.');
    }
}