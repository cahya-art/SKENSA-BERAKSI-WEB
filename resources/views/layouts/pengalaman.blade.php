@extends('layouts.app')

@section('content')
    <div class="bg-[#F8FAFC] min-h-screen">

        <header class="bg-[#2D5A7B] pt-20 pb-28 px-6 relative overflow-hidden text-center">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] bg-white opacity-5 rounded-full">
            </div>

            <div class="relative z-10">
                <h1 class="text-4xl font-bold text-white mb-4">Cerita Sahabat Skensa</h1>
                <p class="text-teal-50/80 max-w-2xl mx-auto leading-relaxed">
                    Ruang aman untuk berbagi, mendengarkan, dan saling menguatkan. Setiap suara berharga di sini.
                </p>

                <div class="flex justify-center mt-10">
                    <div class="bg-white/10 backdrop-blur-md p-1.5 rounded-2xl flex gap-2 border border-white/20">
                        <a href="{{ route('pengalaman') }}"
                            class="{{ !request('filter') ? 'bg-white text-[#2D5A7B]' : 'text-white hover:bg-white/10' }} px-6 py-2 rounded-xl text-sm font-bold transition-all">
                            Semua Cerita
                        </a>

                        <a href="{{ route('pengalaman', ['filter' => 'populer']) }}"
                            class="{{ request('filter') === 'populer' ? 'bg-white text-[#2D5A7B]' : 'text-white hover:bg-white/10' }} px-6 py-2 rounded-xl text-sm font-bold transition-all">
                            Populer
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <div class="max-w-7xl mx-auto px-6 -mt-16 relative z-20 pb-20">

            <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6">

                @foreach($publishedReports as $report)
                    <div class="break-inside-avoid bg-white p-6 rounded-3xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
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

                        <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center border border-gray-100">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path>
                                    </svg>
                                </div>
                                <span class="text-xs font-semibold text-gray-500">
                                    {{ $report->is_anonymous ? 'Siswa Anonim' : 'Seseorang' }}
                                </span>
                            </div>

                            <form action="{{ route('report.like', $report->id) }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-rose-50 hover:bg-rose-100 text-rose-600 transition-all group">
                                    <svg class="w-4 h-4 transition-transform group-hover:scale-125" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3c1.74 0 3.26.83 4.312 2.11C13.05 3.83 14.57 3 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                    </svg>
                                    <span class="text-xs font-bold">{{ $report->likes_count ?? 0 }}</span>
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>
            </div>
    </div>
@endsection