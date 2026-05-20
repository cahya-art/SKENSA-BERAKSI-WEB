@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<div class="bg-[#F8FAFC] min-h-screen p-4 md:p-8 font-['Plus_Jakarta_Sans',sans-serif]">
    <div class="max-w-7xl mx-auto">
        
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-[#1E3A8A]">Daftar Laporan</h1>
            <p class="text-sm text-gray-500">Kelola dan tinjau semua laporan perundungan serta kesehatan mental.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between">
                <div>
                    <span class="text-red-500 font-bold text-xl">!</span>
                    <span class="block text-xs font-bold text-gray-400 uppercase tracking-wider mt-2">Total Laporan</span>
                </div>
                <h2 class="text-3xl font-extrabold text-slate-800 mt-4">{{ $totalLaporan }}</h2>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between">
                <div>
                    <span class="text-lg">📋</span>
                    <span class="block text-xs font-bold text-gray-400 uppercase tracking-wider mt-2">Belum Ditangani</span>
                </div>
                <h2 class="text-3xl font-extrabold text-red-500 mt-4">{{ $belumDitangani }}</h2>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between">
                <div>
                    <span class="text-lg">🔄</span>
                    <span class="block text-xs font-bold text-gray-400 uppercase tracking-wider mt-2">Sedang Ditangani</span>
                </div>
                <h2 class="text-3xl font-extrabold text-slate-700 mt-4">{{ $sedangDitangani }}</h2>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between">
                <div>
                    <span class="text-green-500 text-lg">✓</span>
                    <span class="block text-xs font-bold text-gray-400 uppercase tracking-wider mt-2">Selesai</span>
                </div>
                <h2 class="text-3xl font-extrabold text-green-600 mt-4">{{ $selesai }}</h2>
            </div>
        </div>

        @if(session('success'))
            <div class="mb-6 p-4 text-sm text-green-800 bg-green-50 rounded-xl border border-green-200">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-50 flex items-center justify-between">
                <h3 class="font-bold text-gray-800 text-base">Semua Laporan Masuk</h3>
                <button class="px-4 py-2 border border-gray-200 rounded-xl text-sm font-semibold text-gray-600 flex items-center gap-2 hover:bg-gray-50">
                    ⚙ Filter
                </button>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-[#F8F9FA] text-gray-400 text-xs font-bold uppercase tracking-wider border-b border-gray-100">
                            <th class="py-4 px-6">ID Laporan</th>
                            <th class="py-4 px-6">Tanggal</th>
                            <th class="py-4 px-6 text-blue-900">Nama Pelapor (Admin Only)</th>
                            <th class="py-4 px-6">Kategori</th>
                            <th class="py-4 px-6">Status</th>
                            <th class="py-4 px-6 text-center">Publikasi</th>
                            <th class="py-4 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm text-gray-600 divide-y divide-gray-50">
                        @forelse($reports as $report)
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="py-4 px-6 font-bold text-cyan-600">#REP-{{ $report->id }}</td>
                                
                                <td class="py-4 px-6 text-xs text-gray-400">
                                    {{ $report->created_at->format('d Okt Y') }}<br>
                                    <span class="text-[10px]">{{ $report->created_at->format('H:i') }} WITA</span>
                                </td>
                                
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        {{-- Visual Kotak Inisial: 100% Mempertahankan Style Aslimu --}}
                                        <div class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center font-bold text-xs text-slate-600">
                                            {{ strtoupper(substr($report->user->name ?? 'S', 0, 1)) }}
                                        </div>
                                        {{-- Visual Teks Nama Pelapor: Selalu Tampil Nama Asli --}}
                                        <span class="font-semibold text-gray-800">
                                            {{ $report->user->name ?? 'Siswa (Guest)' }}
                                        </span>
                                    </div>
                                </td>
                                
                                <td class="py-4 px-6">
                                    @if(strtoupper($report->kategori) == 'BULLYING')
                                        <span class="px-2.5 py-1 text-[10px] font-extrabold bg-orange-50 text-orange-600 rounded-md tracking-wider">BULLYING</span>
                                    @else
                                        <span class="px-2.5 py-1 text-[10px] font-extrabold bg-blue-50 text-blue-600 rounded-md tracking-wider">MENTAL HEALTH</span>
                                    @endif
                                </td>
                                
                                <td class="py-4 px-6">
                                    <form action="{{ route('admin.report.status', $report->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select name="status" onchange="this.form.submit()" 
                                            class="text-xs font-bold rounded-lg px-2 py-1.5 cursor-pointer outline-none border-none
                                            {{ $report->status == 'belum ditangani' ? 'bg-red-50 text-red-600' : '' }}
                                            {{ $report->status == 'sedang ditangani' ? 'bg-amber-50 text-amber-600' : '' }}
                                            {{ $report->status == 'selesai' ? 'bg-green-50 text-green-600' : '' }}">
                                            <option value="belum ditangani" {{ $report->status == 'belum ditangani' ? 'selected' : '' }}>BELUM DITANGANI</option>
                                            <option value="sedang ditangani" {{ $report->status == 'sedang ditangani' ? 'selected' : '' }}>SEDANG DITANGANI</option>
                                            <option value="selesai" {{ $report->status == 'selesai' ? 'selected' : '' }}>SELESAI</option>
                                        </select>
                                    </form>
                                </td>
                                
                                <td class="py-4 px-6 text-center">
                                    <form action="{{ route('admin.report.publish', $report->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label class="relative inline-flex items-center cursor-pointer">
        <input type="checkbox" name="is_published" class="sr-only peer" 
               {{ $report->is_published ? 'checked' : '' }} 
               onchange="this.form.submit()">
        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-emerald-500"></div>
    </label>
</form>
                                </td>
                                
                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <form action="{{ route('admin.report.delete', $report->id) }}" method="POST" onsubmit="return confirm('Hapus laporan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-400 hover:text-red-600 p-1">🗑</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="py-10 text-center text-gray-400 text-sm">Belum ada laporan data yang masuk.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection