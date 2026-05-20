@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<div class="bg-[#F8FAFC] border-gray min-h-screen font-['Plus_Jakarta_Sans',sans-serif]">

    <div class="bg-[#4A7C8C] rounded-b-[100px] md:rounded-b-[200px] px-6 md:px-12 py-12 md:py-16 text-center text-white shadow-lg relative overflow-hidden">
        <div class="max-w-3xl mx-auto relative z-10">
            <h1 class="text-2xl md:text-3xl font-bold mb-4">
                Kami Ada Untukmu
            </h1>
            <p class="text-sm md:text-base text-white/90 leading-relaxed">
                Suaramu adalah langkah pertama menuju perubahan. Ceritakan apa yang terjadi dalam<br class="hidden md:block">
                lingkungan yang aman dan terjaga kerahasiaannya.
            </p>
        </div>
    </div>

    <div class="bg-[#F8FAFC] max-w-7xl mx-auto px-6 md:px-12 pt-12 pb-16">
        
        @if(session('success'))
            <div class="max-w-7xl mx-auto mb-6 flex items-center p-4 text-sm text-green-800 border border-green-200 rounded-2xl bg-green-50 shadow-sm animate-fade-in" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <div class="font-medium">{{ session('success') }}</div>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">
            
            <div class="lg:col-span-2 bg-white rounded-3xl shadow-xl p-8 md:p-10">
                
                {{-- LOGIKA 1: JIKA USER SUDAH LOGIN (FORMULIR TERBUKA LEBAR) --}}
                @auth
                    <h2 class="text-[#2D5A7B] font-bold text-xl md:text-2xl mb-2">
                        Formulir Laporan
                    </h2>
                    <p class="text-gray-600 text-sm mb-6">
                        Mohon isi detail kejadian dengan sejujur-jujurnya untuk membantu kami menindaklanjuti.
                    </p>

                    <form method="POST" action="{{ route('report.store') }}" class="space-y-5">
                        @csrf

                        <div>
                            <label class="block text-gray-700 font-semibold text-sm mb-2">
                                Judul Laporan
                            </label>
                            <input type="text" name="judul" required value="{{ old('judul') }}"
                                placeholder="Berikan judul singkat tentang kejadian..."
                                class="w-full bg-[#F8F9FA] text-gray-800 px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-[#4A7C8C] focus:border-transparent text-sm placeholder-gray-400">
                            @error('judul')
                                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold text-sm mb-2">
                                Ceritakan Kejadiannya
                            </label>
                            <textarea name="isi_cerita" required rows="12" 
                                placeholder="Jelaskan secara detail: apa yang terjadi, kapan, di mana, dan siapa saja yang terlibat..."
                                class="w-full bg-[#F8F9FA] text-gray-800 px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-[#4A7C8C] focus:border-transparent text-sm placeholder-gray-400 resize-none">{{ old('isi_cerita') }}</textarea>
                            @error('isi_cerita')
                                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="bg-[#4A7C8C] hover:bg-[#3D6A7A] text-white font-bold px-8 py-3 rounded-xl text-sm transition-all shadow-md flex items-center gap-2">
                                Kirim Laporan
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                @endauth

                {{-- LOGIKA 2: JIKA USER ADALAH TAMU (FORMULIR DIKUNCI & TAMPILKAN VISUAL ASLIMU) --}}
                @guest
                    <div class="max-w-md mx-auto my-12 text-center">
                        <div class="text-5xl mb-4">🔒</div>
                        <h2 class="text-xl font-bold text-slate-800 mb-2">Akses Terbatas</h2>
                        <p class="text-sm text-gray-500 mb-6 leading-relaxed">
                            Untuk melaporkan tindakan perundungan, silakan daftarkan akun sekolahmu terlebih dahulu demi validitas data laporan.
                        </p>
                        <a href="{{ route('register') }}" class="inline-block w-full py-3.5 px-4 bg-[#4A7C8C] hover:bg-[#3D6A7A] text-white font-bold rounded-xl text-sm transition-all shadow-md">
                            Buat Akun Sekarang
                        </a>
                    </div>
                @endguest
                
            </div>

            <div class="space-y-6">
                
                <div class="bg-[#E8F4F8] rounded-3xl shadow-lg p-6">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="w-5 h-5 text-[#4A7C8C]" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="text-[#2D5A7B] font-bold text-base">
                            Tips Melapor Aman
                        </h3>
                    </div>
                    
                    <div class="space-y-3 text-xs text-gray-700">
                        <div class="flex gap-2">
                            <svg class="w-4 h-4 text-[#4A7C8C] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <p>Pastikan Anda berada di tempat yang tenang dan privat saat filling laporan ini.</p>
                        </div>
                        <div class="flex gap-2">
                            <svg class="w-4 h-4 text-[#4A7C8C] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <p>Lampirkan bukti berupa foto atau tangkapan layar jika ada (dapat dilakukan setelah laporan dibuat).</p>
                        </div>
                        <div class="flex gap-2">
                            <svg class="w-4 h-4 text-[#4A7C8C] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <p>Gunakan fitur anonim jika Anda merasa kurang nyaman memberikan identitas langsung.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-[#FF4D4D] rounded-3xl shadow-lg p-6 text-white">
                    <div class="flex items-center gap-2 mb-3">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <h3 class="font-bold text-base">
                            Butuh Bantuan Segera?
                        </h3>
                    </div>
                    <p class="text-xs text-white/90 mb-4">
                        Jika Anda merasa terancam secara fisik, hubungi tim keamanan sekolah atau hotline darurat kami.
                    </p>
                    <div class="flex items-center gap-2 bg-white/20 rounded-lg px-3 py-2.5 backdrop-blur-sm">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <span class="font-bold text-lg">0822-6631-0512</span>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <img src="{{ asset('images/library.png') }}" alt="School Library" class="w-full h-48 object-cover">
                    <div class="p-4 bg-gradient-to-t from-black/60 to-transparent -mt-20 relative">
                        <p class="text-white text-sm font-medium">
                            Lingkungan sekolah yang sehat dimulai dari<br>keberanianmu.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</div>
@endsection