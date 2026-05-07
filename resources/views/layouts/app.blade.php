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

    <!-- NAVBAR (Berdasarkan Gambar 2 & 3) -->
    <nav class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <span class="font-bold text-xl text-[#2D5A7B]">Skensa Beraksi</span>
            </div>

            <!-- Nav Links -->
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

            <!-- User Actions -->
            <div class="flex items-center gap-5">
                <button class="text-gray-400 hover:text-[#2D5A7B]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>
                <button class="text-gray-400 hover:text-[#2D5A7B]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </button>
                <div class="w-10 h-10 rounded-full bg-gray-200 overflow-hidden border border-teal-500 p-0.5">
                    <img src="https://ui-avatars.com/api/?name=Siswa+Skensa&background=2D5A7B&color=fff" alt="Profile">
                </div>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER (Berdasarkan Gambar 2) -->
    <footer class="bg-white border-t border-gray-100 pt-16 pb-8 mt-20">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">
            <!-- Brand -->
            <div>
                <h3 class="font-bold text-xl text-[#2D5A7B] mb-4">Skensa Beraksi</h3>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Platform dukungan siswa untuk menciptakan lingkungan sekolah yang bebas perundungan, inklusif, dan
                    saling mendukung.
                </p>
            </div>

            <!-- Tautan Dukungan -->
            <div>
                <h4 class="font-bold text-gray-800 mb-5">Tautan Dukungan</h4>
                <ul class="space-y-3 text-sm text-gray-500">
                    <li><a href="#" class="hover:text-[#2D5A7B]">Panduan Keamanan</a></li>
                    <li><a href="#" class="hover:text-[#2D5A7B]">Kebijakan Privasi</a></li>
                    <li><a href="#" class="hover:text-[#2D5A7B]">Pusat Bantuan</a></li>
                </ul>
            </div>

            <!-- Komunitas -->
            <div>
                <h4 class="font-bold text-gray-800 mb-5">Komunitas</h4>
                <div class="flex gap-4">
                    <div class="w-10 h-10 bg-[#F0F7F7] rounded-full flex items-center justify-center text-[#2D5A7B]">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15h-2v-6h2v6zm-1-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm5 7h-2v-6h2v6zm-1-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z" />
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