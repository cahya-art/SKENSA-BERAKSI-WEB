<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // <- PENTING: Untuk enkripsi password
use Illuminate\Support\Facades\DB;   // <- PENTING: Untuk query ke tabel siswa_master
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Menampilkan halaman form register
     */
    public function showRegistrationForm()
    {
        return view('login.register');
    }

    /**
     * Memproses pendaftaran siswa baru
     */
    public function register(Request $request)
    {
        // 1. Validasi format form register
        $request->validate([
            'name' => 'required|string|max:255',
            'nis' => 'required|string|max:50|unique:users,nis',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6',
        ], [
            // Custom pesan error jika format inputan salah (Opsional tapi bagus untuk UX)
            'nis.unique' => 'Nomor NIS ini sudah pernah didaftarkan sebelumnya.',
            'email.unique' => 'Alamat email ini sudah digunakan.',
            'password.min' => 'Password minimal harus terdiri dari 6 karakter.',
        ]);

        // 2. Validasi ke data sekolah asli (Tabel siswa_master yang berisi data X RPL 2)
        $siswaSah = DB::table('siswa_master')->where('nis', $request->nis)->first();

        if (!$siswaSah) {
            return back()->withErrors([
                'nis' => 'Nomor NIS Anda tidak terdaftar sebagai siswa resmi SMKN 1 Denpasar.'
            ])->withInput();
        }

        // 3. Buat akun siswa baru dengan role 'siswa' otomatis
        User::create([
            'name' => $request->name,
            'nis' => $request->nis,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'siswa', // Otomatis dikunci sebagai siswa saat register
        ]);

        // 4. JANGAN LANGSUNG LOGIN. Alihkan ke halaman login sambil membawa NIS dan Password asli bawaan
        return redirect()->route('login')->with([
            'success' => 'Akun berhasil dibuat! Silakan klik tombol login.',
            'registered_nis' => $request->nis,
            'registered_password' => $request->password // Dikirim dalam bentuk text asli (bukan Bcrypt) agar bisa ngetik otomatis di form
        ]);
    }
}