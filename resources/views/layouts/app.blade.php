<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skensa Beraksi - Ruang Aman Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-[#F8FAFC]">

    <nav class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-8xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="font-bold text-xl text-[#2D5A7B]">Skensa Beraksi</span>
            </div>

            <div class="hidden md:flex items-center gap-10 text-sm font-medium text-gray-500">

                <a href="{{ route('edukasi') }}"
                    class="transition-colors pb-1 {{ request()->is('edukasi') ? 'text-[#2D5A7B] border-b-2 border-[#2D5A7B]' : 'hover:text-[#2D5A7B]' }}">
                    Informasi
                </a>

                <a href="{{ route('ceritakan') }}"
                    class="transition-colors pb-1 {{ request()->is('ceritakan') ? 'text-[#2D5A7B] border-b-2 border-[#2D5A7B]' : 'hover:text-[#2D5A7B]' }}">
                    Ceritakan
                </a>

                <a href="{{ route('pengalaman') }}"
                    class="transition-colors pb-1 {{ request()->is('pengalaman') ? 'text-[#2D5A7B] border-b-2 border-[#2D5A7B]' : 'hover:text-[#2D5A7B]' }}">
                    Pengalaman
                </a>

            </div>

            <div class="flex items-center gap-4">

                {{-- 1. JIKA USER SUDAH LOGIN (Siswa atau Admin) --}}
                @auth
                    {{-- Tombol Dashboard Admin (Hanya muncul jika yang login punya role admin) --}}
                    @if (auth()->user()->role === 'admin')
                    <a href="{{ route('admin.dashboard') }}"
                        class="text-gray-600 hover:text-[#2D5A7B] transition-colors p-2 bg-gray-100 rounded-full"
                        title="Masuk Halaman Admin">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                    </a>
                    @endif

                    {{-- Form Tombol Logout (Dipasang tepat sebelum photo profile) --}}
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-sm font-medium text-gray-500 hover:text-red-600 transition-colors flex items-center gap-1 px-2.5 py-1.5 rounded-lg hover:bg-red-50" title="Keluar Akun">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"></path>
                            </svg>
                            <span class="hidden sm:inline">Keluar</span>
                        </button>
                    </form>

                    {{-- Foto Profil User --}}
                    <img src="{{ asset('images/profile.png') }}" class="w-9 h-9 rounded-full object-cover border border-gray-100 shadow-sm" title="{{ auth()->user()->name }}">
                @endauth

                {{-- 2. JIKA USER ADALAH TAMU (Belum Login) --}}
                @guest
                    <div class="flex items-center gap-3">
                        <a href="{{ route('login') }}" class="text-sm font-semibold text-[#2D5A7B] hover:text-[#224660] transition-colors">
                            Masuk
                        </a>
                        <a href="{{ route('register') }}" class="text-sm font-semibold bg-[#2D5A7B] text-white px-4 py-2 rounded-xl shadow-md hover:bg-[#224660] transition-colors">
                            Daftar
                        </a>
                    </div>
                @endguest

            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-white border-t border-gray-100 pt-16 pb-8 mt-20">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">
            <div>
                <h3 class="font-bold text-xl text-[#2D5A7B] mb-4">Skensa Beraksi</h3>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Platform dukungan siswa untuk menciptakan lingkungan sekolah yang bebas perundungan, inklusif, dan
                    saling mendukung.
                </p>
            </div>

            <div>
                <h4 class="font-bold text-gray-800 mb-5">Tautan Dukungan</h4>
                <ul class="space-y-3 text-sm text-gray-500">
                    <li><a href="#" class="hover:text-[#2D5A7B]">Panduan Keamanan</a></li>
                    <li><a href="#" class="hover:text-[#2D5A7B]">Kebijakan Privasi</a></li>
                    <li><a href="#" class="hover:text-[#2D5A7B]">Pusat Bantuan</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-gray-800 mb-5">Komunitas</h4>
                <div class="flex gap-4">
                    <div class="w-10 h-10 bg-[#F0F7F7] rounded-full flex items-center justify-center text-[#2D5A7B]">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15h-2v-6h2v6zm-1-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm5 7h-2v-6h2v6zm-1-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z" />
                        </svg>
                    </div>
                    <div class="w-10 h-10 bg-[#F0F7F7] rounded-full flex items-center justify-center text-[#2D5A7B]">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center border-t border-gray-50 pt-8 text-[10px] text-gray-400">
            © 2026 Skensa Beraksi. Dikembangkan dengan penuh kasih untuk kenyamanan siswa.
        </div>
    </footer>

</body>
</html>