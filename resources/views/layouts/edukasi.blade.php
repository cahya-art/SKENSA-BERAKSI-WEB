@extends('layouts.app')

@section('content')
<div class="bg-[#F8FAFC] min-h-screen">
    <!-- Hero Section -->
    <section class="bg-gradient-to-b from-[#E0F2F1] to-[#F8FAFC] pt-12 pb-20 px-6 text-center">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold text-[#2D5A7B] mb-4">Selamat Pagi, Sahabat Skensa</h1>
            <p class="text-gray-600 max-w-2xl mx-auto mb-12">
                Bersama kita ciptakan lingkungan sekolah yang aman, nyaman, dan penuh dukungan untuk setiap langkahmu.
            </p>

            <!-- Grid Konten Edukasi -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 text-left">
                
                <!-- Card Utama: Apa itu Perundungan -->
                <div class="md:col-span-6 bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 bg-[#F0F7F7] rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-[#2D5A7B]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Apa itu Perundungan?</h3>
                        <p class="text-gray-500 leading-relaxed mb-8">
                            Perundungan bukan sekadar ejekan biasa. Ini adalah tindakan agresif yang dilakukan secara sengaja dan berulang. Mengenalinya adalah langkah pertama untuk menghentikannya.
                        </p>
                    </div>
                    <button class="bg-[#2D5A7B] text-white px-8 py-3 rounded-xl font-semibold w-fit hover:bg-[#244a66] transition-all">
                        Pelajari Selengkapnya
                    </button>
                </div>

                <!-- Kolom Kanan: Jenis-jenis Perundungan -->
                <div class="md:col-span-6 grid grid-cols-2 gap-6">
                    <!-- Verbal -->
                    <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100">
                        <div class="w-10 h-10 bg-teal-50 rounded-xl flex items-center justify-center mb-4 text-[#2D5A7B]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" /></svg>
                        </div>
                        <h4 class="font-bold text-gray-800">Verbal</h4>
                        <p class="text-[11px] text-gray-400 mt-2 leading-relaxed">Kata-kata yang menyakitkan, julukan, atau ancaman.</p>
                    </div>
                    <!-- Fisik -->
                    <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100">
                        <div class="w-10 h-10 bg-red-50 rounded-xl flex items-center justify-center mb-4 text-red-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11" /></svg>
                        </div>
                        <h4 class="font-bold text-gray-800">Fisik</h4>
                        <p class="text-[11px] text-gray-400 mt-2 leading-relaxed">Kontak fisik yang tidak diinginkan atau merusak properti.</p>
                    </div>
                    <!-- Sosial -->
                    <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100">
                        <div class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center mb-4 text-blue-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <h4 class="font-bold text-gray-800">Sosial</h4>
                        <p class="text-[11px] text-gray-400 mt-2 leading-relaxed">Pengucilan, penyebaran rumor, atau merusak reputasi.</p>
                    </div>
                    <!-- Cyber -->
                    <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100">
                        <div class="w-10 h-10 bg-purple-50 rounded-xl flex items-center justify-center mb-4 text-purple-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                        </div>
                        <h4 class="font-bold text-gray-800">Cyber</h4>
                        <p class="text-[11px] text-gray-400 mt-2 leading-relaxed">Pelecehan melalui media digital dan internet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Motivation Banner -->
    <section class="max-w-6xl mx-auto px-6 -mt-8 relative z-10">
        <div class="bg-gradient-to-r from-[#2D5A7B] to-[#45849E] rounded-[2.5rem] p-12 shadow-xl relative overflow-hidden">
            <div class="relative z-10">
                <span class="text-teal-200 text-xs font-bold uppercase tracking-widest mb-4 block">Pesan Motivasi Hari Ini</span>
                <h2 class="text-white text-2xl md:text-3xl font-medium italic leading-relaxed max-w-4xl">
                    "Kebaikanmu adalah kekuatanmu. Jangan biarkan siapapun mematikan cahayamu."
                </h2>
            </div>
            <!-- Dekorasi Icon Quote Besar -->
            <div class="absolute right-10 bottom-[-20px] text-white opacity-10">
                <svg class="w-48 h-48" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="max-w-6xl mx-auto px-6 py-20">
        <div class="flex justify-between items-center mb-10">
            <h2 class="text-2xl font-bold text-[#2D5A7B]">Video Edukasi Bullying</h2>
            <a href="#" class="text-sm font-semibold text-gray-500 hover:text-[#2D5A7B] flex items-center gap-2">
                Lihat Semua <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Video Card Loop -->
            @for ($i = 0; $i < 3; $i++)
            <div class="bg-white rounded-[2rem] overflow-hidden shadow-sm border border-gray-100 group cursor-pointer hover:shadow-md transition-all">
                <div class="relative aspect-video bg-gray-200">
                    <!-- Placeholder Image (Sesuai Asset Kamu) -->
                    <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg" class="w-full h-full object-cover opacity-90 group-hover:opacity-100 transition-opacity">
                    <!-- Play Button -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-14 h-14 bg-white/90 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-[#2D5A7B] fill-current" viewBox="0 0 24 24"><path d="M8 5v14l11-7z" /></svg>
                        </div>
                    </div>
                </div>
                <div class="p-6 text-left">
                    <h4 class="font-bold text-gray-800 mb-2">Apa itu bullying?</h4>
                    <p class="text-[12px] text-gray-400 leading-relaxed">
                        Yuk cari tahu apa itu bullying dan apa dampak-dampak dari bullying bagi kesehatan mental...
                    </p>
                </div>
            </div>
            @endfor
        </div>
    </section>
</div>
@endsection