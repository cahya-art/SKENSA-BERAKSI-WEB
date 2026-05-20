<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Skensa Beraksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
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

    <div
        class="bg-white shadow-2xl rounded-[30px] overflow-hidden flex flex-col md:flex-row w-full max-w-5xl h-auto md:h-[650px]">

        <div class="w-full md:w-1/2 p-10 md:p-16 flex flex-col justify-center">
            <div class="flex items-center gap-2 mb-8 text-[#2D5A7B]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z" />
                </svg>
                <span class="font-bold text-lg">Skensa Beraksi</span>
            </div>

            <h2 class="text-2xl font-bold text-gray-800 mb-2">Selamat datang kembali</h2>
            <p class="text-gray-500 mb-6 text-sm">Masuk ke akun pelajar anda</p>

            {{-- NOTIFIKASI SUKSES SETELAH REGISTER (Ditambahkan di sini agar rapi) --}}
            @if(session('success'))
                <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-xl mb-5 text-xs font-medium">
                    {{ session('success') }}
                </div>
            @endif

            {{-- JIKA ADA ERROR LOGIN --}}
            @if($errors->has('nis'))
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-5 text-xs font-medium">
                    {{ $errors->first('nis') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Student ID (NIS)</label>
                    <input type="text" name="nis" value="{{ session('registered_nis') ?? old('nis') }}" required
                        placeholder="Enter your NIS"
                        class="w-full pl-4 pr-4 py-3 bg-[#F0F7F7] border border-transparent rounded-xl outline-none text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input type="password" name="password" value="{{ session('registered_password') }}" required
                        placeholder="Enter your Password"
                        class="w-full pl-4 pr-4 py-3 bg-[#F0F7F7] border border-transparent rounded-xl outline-none text-sm">
                </div>

                <button type="submit" class="w-full py-3 bg-[#2D5A7B] text-white font-semibold rounded-xl shadow-lg hover:bg-[#224660] transition-colors">
                    Login
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

        <div
            class="hidden md:flex w-1/2 bg-gradient-to-br from-[#E0F2F1] via-[#B2DFDB] to-[#80CBC4] relative items-center justify-center p-12 overflow-hidden">

            <div class="absolute top-[-40px] right-[-40px] w-64 h-64 bg-white opacity-20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-[-20px] left-[-20px] w-48 h-48 bg-teal-100 opacity-40 rounded-full blur-2xl"></div>

            <div class="relative z-10 text-center flex flex-col items-center">
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