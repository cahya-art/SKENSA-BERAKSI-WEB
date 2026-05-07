@extends('layouts.app')

@section('content')
    <div class="bg-[#F8FAFC] min-h-screen">

        <!-- Header Section (Sesuai Gambar Pengalaman.jpg) -->
        <header class="bg-[#2D5A7B] pt-20 pb-28 px-6 relative overflow-hidden text-center">
            <!-- Dekorasi Lingkaran di Tengah -->
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] bg-white opacity-5 rounded-full">
            </div>

            <div class="relative z-10">
                <h1 class="text-4xl font-bold text-white mb-4">Cerita Sahabat Skensa</h1>
                <p class="text-teal-50/80 max-w-2xl mx-auto leading-relaxed">
                    Ruang aman untuk berbagi, mendengarkan, dan saling menguatkan. Setiap suara berharga di sini.
                </p>

                <!-- Tab Filter (Semua Cerita, Populer, Terbaru) -->
                <div class="flex justify-center mt-10">
                    <div class="bg-white/10 backdrop-blur-md p-1.5 rounded-2xl flex gap-2 border border-white/20">
                        <button class="bg-white text-[#2D5A7B] px-6 py-2 rounded-xl text-sm font-bold">Semua Cerita</button>
                        <button
                            class="text-white hover:bg-white/10 px-6 py-2 rounded-xl text-sm font-medium transition-all">Populer</button>
                        <button
                            class="text-white hover:bg-white/10 px-6 py-2 rounded-xl text-sm font-medium transition-all">Terbaru</button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Content Section -->
        <div class="max-w-7xl mx-auto px-6 -mt-16 relative z-20 pb-20">

            <!-- Masonry-like Grid Cerita -->
            <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6">

                @foreach($reports as $report)
                    <div
                        class="break-inside-avoid bg-white p-6 rounded-3xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                        <div class="flex justify-between items-start mb-4">
                            <span class="px-3 py-1 bg-blue-50 text-[#2D5A7B] text-[10px] font-bold rounded-full uppercase">
                                {{ $report->kategori }}
                            </span>
                            <span class="text-[10px] text-gray-400">
                                {{ $report->created_at->diffForHumans() }}
                            </span>
                        </div>

                        <h3 class="text-lg font-bold text-gray-800 mb-2 leading-tight">
                            {{ $report->judul }}
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            {{ $report->isi_cerita }}
                        </p>

                        <div class="flex items-center gap-3 pt-4 border-t border-gray-50">
                            <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center">
                                <i class="fas fa-user text-gray-400 text-xs"></i>
                            </div>
                            <span class="text-xs font-semibold text-gray-500">
                                {{ $report->is_anonymous ? 'Siswa Anonim' : 'Seseorang' }}
                            </span>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Button Load More -->
            <div class="flex justify-center mt-12">
                <button
                    class="px-8 py-3 bg-[#2D5A7B] text-white rounded-xl font-bold hover:bg-[#244a66] transition-all shadow-lg shadow-teal-900/10">
                    Lihat Cerita Lainnya
            </div>
        </div>
    </div>
    </div>
@endsection