<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nis' => 'required|string',
            'password' => 'required|string',
        ]);

        // Proses pengecekan login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // PERBAIKAN: Arahkan langsung menggunakan route GET ke halaman ceritakan
            return redirect()->route('edukasi')->with('success', 'Selamat datang kembali!');
        }

        // Jika gagal login
        return back()->withErrors([
            'nis' => 'NIS atau Password yang Anda masukkan salah.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}