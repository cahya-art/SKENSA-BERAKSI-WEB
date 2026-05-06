<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Skensa Beraksi</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Plus Jakarta Sans (Opsional agar mirip Figma) -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .bg-teal-gradient {
            background: linear-gradient(135deg, #E0F2F1 0%, #B2DFDB 100%);
        }
    </style>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen p-6">

    <!-- Container Utama: Split Screen -->
    <div
        class="bg-white shadow-2xl rounded-[30px] overflow-hidden flex flex-col md:flex-row w-full max-w-5xl h-auto md:h-[650px]">

        <!-- Sisi Kiri: Form Input -->
        <div class="w-full md:w-1/2 p-10 md:p-16 flex flex-col justify-center">
            <!-- Brand & Logo -->
            <div class="flex items-center gap-2 mb-8 text-[#2D5A7B]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z" />
                </svg>
                <span class="font-bold text-lg">Skensa Beraksi</span>
            </div>

            <h2 class="text-2xl font-bold text-gray-800 mb-2">Selamat datang kembali</h2>
            <p class="text-gray-500 mb-8 text-sm">Masuk ke akun pelajar anda</p>

            <form action="#" method="POST" class="space-y-6">
                <!-- Input NIS -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">NIS</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <input type="text" placeholder="Masukkan NIS anda"
                            class="w-full pl-10 pr-4 py-3 bg-[#F0F7FF] border border-transparent rounded-xl focus:ring-2 focus:ring-teal-500 focus:bg-white outline-none transition-all">
                    </div>
                </div>

                <!-- Input Password -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                        <input type="password" placeholder="Masukkan password anda"
                            class="w-full pl-10 pr-4 py-3 bg-[#F0F7FF] border border-transparent rounded-xl focus:ring-2 focus:ring-teal-500 focus:bg-white outline-none transition-all">
                    </div>
                </div>

                <!-- Button Login -->
                <button type="submit"
                    class="w-full bg-[#2D5A7B] hover:bg-[#1e3d54] text-white font-bold py-3 rounded-xl shadow-lg transition-all transform active:scale-95">
                    Log In
                </button>
            </form>

            <div class="mt-8 text-center">
                <p class="text-xs text-gray-400 mb-4 uppercase tracking-widest">— Akses lainnya —</p>
                <div class="flex justify-center gap-8 text-sm font-semibold text-teal-700">
                    <a href="{{ route('edukasi') }}" class="hover:text-teal-900 transition-colors">Akun tamu</a>
                    <a href="{{ route('register') }}" class="hover:text-teal-900 transition-colors">Daftar akun</a>
                </div>
            </div>
        </div>

        <!-- Sisi Kanan: Ilustrasi & Pesan -->
        <!-- Sisi Kanan: Ilustrasi & Pesan dengan Background Gradient -->
        <div
            class="hidden md:flex w-1/2 bg-gradient-to-br from-[#E0F2F1] via-[#B2DFDB] to-[#80CBC4] relative items-center justify-center p-12 overflow-hidden">

            <!-- Tambahkan Lingkaran Dekoratif Soft (Opsional, agar mirip Figma) -->
            <div class="absolute top-[-40px] right-[-40px] w-64 h-64 bg-white opacity-20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-[-20px] left-[-20px] w-48 h-48 bg-teal-100 opacity-40 rounded-full blur-2xl">
            </div>

            <div class="relative z-10 text-center flex flex-col items-center">
                <!-- Gambar Ilustrasi Orang Berpelukan -->
                <img src="{{ asset('images/login-ilustrasion.png') }}" alt="Ilustrasi Skensa Beraksi"
                    class="max-w-[400px] mb-8 drop-shadow-xl transition-transform hover:scale-105 duration-500">

                <h3 class="text-[#2D5A7B] font-bold text-xl mb-3">Kamu tidak sendiri</h3>
                <p class="text-[#3E738C] text-sm leading-relaxed max-w-xs">
                    Skensa Beraksi adalah ruang aman bagi setiap siswa untuk terhubung, melaporkan, dan mencari dukungan
                    di dalam komunitas sekolah kami.
                </p>
            </div>
        </div>
    </div>

</body>

</html>