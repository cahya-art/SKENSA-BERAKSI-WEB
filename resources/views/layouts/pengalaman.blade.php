@extends('layouts.app')

@section('content')
<div class="bg-[#F8FAFC] min-h-screen">
    
    <!-- Header Section (Sesuai Gambar Pengalaman.jpg) -->
    <header class="bg-[#2D5A7B] pt-20 pb-28 px-6 relative overflow-hidden text-center">
        <!-- Dekorasi Lingkaran di Tengah -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] bg-white opacity-5 rounded-full"></div>
        
        <div class="relative z-10">
            <h1 class="text-4xl font-bold text-white mb-4">Cerita Sahabat Skensa</h1>
            <p class="text-teal-50/80 max-w-2xl mx-auto leading-relaxed">
                Ruang aman untuk berbagi, mendengarkan, dan saling menguatkan. Setiap suara berharga di sini.
            </p>
            
            <!-- Tab Filter (Semua Cerita, Populer, Terbaru) -->
            <div class="flex justify-center mt-10">
                <div class="bg-white/10 backdrop-blur-md p-1.5 rounded-2xl flex gap-2 border border-white/20">
                    <button class="bg-white text-[#2D5A7B] px-6 py-2 rounded-xl text-sm font-bold">Semua Cerita</button>
                    <button class="text-white hover:bg-white/10 px-6 py-2 rounded-xl text-sm font-medium transition-all">Populer</button>
                    <button class="text-white hover:bg-white/10 px-6 py-2 rounded-xl text-sm font-medium transition-all">Terbaru</button>
                </div>
            </div>
        </div>
    </header>

    <!-- Content Section -->
    <div class="max-w-7xl mx-auto px-6 -mt-16 relative z-20 pb-20">
        
        <!-- Masonry-like Grid Cerita -->
        <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6">
            
            <!-- Card 1: Inspirasi -->
            <div class="break-inside-avoid bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-md transition-all">
                <div class="flex justify-between items-center mb-4">
                    <span class="px-3 py-1 bg-teal-50 text-teal-600 text-[10px] font-bold rounded-lg uppercase">Inspirasi</span>
                    <span class="text-xs text-gray-400">12 menit yang lalu</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3 leading-tight">Menemukan Kembali Kepercayaan Diri</h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-6">
                    Awalnya aku merasa sangat kecil di kelas. Takut bicara, takut salah. Tapi setelah ikut sesi diskusi di Skensa Beraksi, aku sadar kalau setiap orang punya prosesnya masing-masing...
                </p>
                <div class="flex justify-between items-center pt-4 border-t border-gray-50">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-500 text-xs">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                        </div>
                        <span class="text-sm font-medium text-gray-600">Anonim</span>
                    </div>
                    <div class="flex gap-4 text-gray-400">
                        <span class="flex items-center gap-1 text-xs"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg> 24</span>
                        <span class="flex items-center gap-1 text-xs"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg> 8</span>
                    </div>
                </div>
            </div>

            <!-- Card 2: Dengan Gambar (Persahabatan) -->
            <div class="break-inside-avoid bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-all">
                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=800&q=80" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-[10px] font-bold rounded-lg uppercase">Persahabatan</span>
                        <span class="text-xs text-gray-400">1 jam yang lalu</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 leading-tight">Sahabat Yang Mendengarkan</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-6">
                        Kadang kita hanya butuh seseorang yang mau mendengar tanpa menghakimi. Terima kasih untuk teman-teman yang selalu ada saat aku merasa down.
                    </p>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-50">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-gray-500">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                            </div>
                            <span class="text-sm font-medium text-gray-600">Anonim</span>
                        </div>
                        <div class="flex gap-2 items-center text-red-500 font-bold text-xs">
                             <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                             156
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3: Kesehatan Mental -->
            <div class="break-inside-avoid bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-md transition-all">
                <div class="flex justify-between items-center mb-4">
                    <span class="px-3 py-1 bg-purple-50 text-purple-600 text-[10px] font-bold rounded-lg uppercase">Kesehatan Mental</span>
                    <span class="text-xs text-gray-400">3 jam yang lalu</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3 leading-tight">Tidak Apa-apa Tidak Baik-baik Saja</h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-6">
                    Jangan memaksakan diri untuk selalu terlihat kuat. Hari ini aku belajar untuk menerima kalau aku sedang lelah dan butuh istirahat sejenak dari semua tekanan tugas.
                </p>
                <div class="flex justify-between items-center pt-4 border-t border-gray-50">
                    <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
                        <div class="w-8 h-8 bg-teal-50 rounded-full flex items-center justify-center text-teal-600 text-xs">
                             <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                        </div>
                        Anonim
                    </div>
                    <div class="flex gap-4 text-gray-400 text-xs font-medium">
                        <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg> 89</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Button Load More -->
        <div class="flex justify-center mt-12">
            <button class="px-8 py-3 bg-[#2D5A7B] text-white rounded-xl font-bold hover:bg-[#244a66] transition-all shadow-lg shadow-teal-900/10">
                Lihat Cerita Lainnya
            </div>
        </div>
    </div>
</div>
@endsection