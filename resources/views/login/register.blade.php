<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Skensa Beraksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-white min-h-screen flex items-center justify-center">

    <div class="flex w-full min-h-screen">
        <!-- Sisi Kiri: Form Register -->
        <div class="w-full md:w-1/2 flex flex-col justify-center px-8 md:px-24 py-10">
            <!-- Logo & Brand -->
           <div class="flex items-center gap-2 mb-8 text-[#2D5A7B]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z" />
                </svg>
                <span class="font-bold text-lg">Skensa Beraksi</span>
            </div>

            <h2 class="text-2xl font-bold text-gray-800 mb-1">Register</h2>
            <p class="text-gray-500 mb-8">Register to more experience</p>

            <form action="#" method="POST" class="space-y-5">
                <!-- Input Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                        </span>
                        <input type="text" placeholder="Enter your full name" class="w-full pl-10 pr-4 py-3 bg-[#F0F7F7] border border-transparent focus:border-teal-500 focus:bg-white rounded-xl outline-none transition-all">
                    </div>
                </div>

                <!-- Input NIS -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Student ID (NIS)</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" /></svg>
                        </span>
                        <input type="text" placeholder="Enter your NIS number" class="w-full pl-10 pr-4 py-3 bg-[#F0F7F7] border border-transparent focus:border-teal-500 focus:bg-white rounded-xl outline-none transition-all">
                    </div>
                </div>

                <!-- Input Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                        </span>
                        <input type="password" placeholder="Enter your Password" class="w-full pl-10 pr-4 py-3 bg-[#F0F7F7] border border-transparent focus:border-teal-500 focus:bg-white rounded-xl outline-none transition-all">
                    </div>
                </div>

                <button type="submit" class="w-full py-3 bg-[#2D5A7B] hover:bg-[#244a66] text-white font-semibold rounded-xl transition-all shadow-lg mt-4">
                    Register
                </button>

                <!-- Divider -->
                <div class="relative flex items-center py-4">
                    <div class="flex-grow border-t border-gray-200"></div>
                    <span class="flex-shrink mx-4 text-gray-400 text-xs uppercase tracking-widest">Other Access</span>
                    <div class="flex-grow border-t border-gray-200"></div>
                </div>

                <div class="text-center">
                    <a href="{{ route('login') }}" class="text-[#2D5A7B] font-bold hover:underline">Login account</a>
                </div>
            </form>
        </div>

        <!-- Sisi Kanan: Background Gradient & Pesan -->
        <div class="hidden md:flex w-1/2 bg-gradient-to-br from-[#E0F2F1] via-[#B2DFDB] to-[#80CBC4] relative items-center justify-center p-12 overflow-hidden">
            <!-- Dekorasi Lingkaran -->
            <div class="absolute top-[-40px] right-[-40px] w-64 h-64 bg-white opacity-20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-[-20px] left-[-20px] w-48 h-48 bg-teal-100 opacity-40 rounded-full blur-2xl"></div>

            <div class="relative z-10 text-center flex flex-col items-center">
                <!-- Gunakan Asset Gambar yang sama dari Figma -->
                <div class="bg-[#FCD5B4] p-4 rounded-[40px] shadow-2xl mb-10 transform -rotate-3">
                    <img src="{{ asset('images/login-ilustrasion.png') }}" alt="Register Illustration" class="w-[320px] drop-shadow-xl">
                </div>
                
                <p class="text-[#2D5A7B] font-medium italic mb-2">You're not alone.</p>
                <p class="text-[#3E738C] text-sm leading-relaxed max-w-sm">
                    Skensa Beraksi adalah ruang aman bagi setiap siswa untuk terhubung, melaporkan, dan mencari dukungan di dalam komunitas sekolah kami.
                </p>
            </div>
        </div>
    </div>

</body>
</html>