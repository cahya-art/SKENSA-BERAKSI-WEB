@extends('layouts.app')

@section('content')
    <div class="bg-[#F8FAFC] min-h-screen pb-20">
        <!-- Header Ringkas -->
        <div class="max-w-4xl mx-auto px-6 pt-12 pb-8">
            <h1 class="text-3xl font-bold text-[#2D5A7B] mb-2">Ceritakan Masalahmu</h1>
            <p class="text-gray-500">Suaramu sangat berarti. Setiap laporan akan kami jaga kerahasiaannya demi kenyamanan
                bersama.</p>
        </div>

        <div class="max-w-4xl mx-auto px-6">
            <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-8 md:p-12">

                    @if(session('success'))
                        <div class="flex items-center p-4 mb-6 text-sm text-green-800 border border-green-300 rounded-2xl bg-green-50 shadow-sm transition-all animate-pulse"
                            role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <div>
                                <span class="font-bold">Berhasil!</span> {{ session('success') }}
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('report.store') }}" method="POST">
                        @csrf
                        <!-- Baris Atas: Judul & Kategori -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-3">Judul Cerita / Kejadian</label>
                                <input type="text" name="judul" placeholder="Berikan judul singkat..."
                                    class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-5 py-4 focus:outline-none focus:border-[#2D5A7B] focus:bg-white transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-3">Kategori Perundungan</label>
                                <select name="kategori"
                                    class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-5 py-4 focus:outline-none focus:border-[#2D5A7B] focus:bg-white transition-all appearance-none">
                                    <option value="verbal">Perundungan Verbal</option>
                                    <option value="fisik">Perundungan Fisik</option>
                                    <option value="sosial">Perundungan Sosial</option>
                                    <option value="cyber">Cyber Bullying</option>
                                </select>
                            </div>
                        </div>

                        <!-- Area Cerita -->
                        <div class="mb-8">
                            <label class="block text-sm font-bold text-gray-700 mb-3">Isi Cerita Lengkap</label>
                            <textarea name="cerita" rows="6" placeholder="Ceritakan apa yang terjadi, di mana, dan kapan..."
                                class="w-full bg-gray-50 border border-gray-100 rounded-[2rem] px-6 py-5 focus:outline-none focus:border-[#2D5A7B] focus:bg-white transition-all"></textarea>
                        </div>

                        <!-- Opsi Anonimitas -->
                        <div class="bg-[#F0F7F7] p-6 rounded-[2rem] mb-10 flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#2D5A7B] shadow-sm">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-[#2D5A7B] text-sm">Kirim sebagai Anonim</h4>
                                    <p class="text-[11px] text-gray-500">Namamu tidak akan diperlihatkan kepada siapapun.
                                    </p>
                                </div>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" name="is_anonymous" value="1" class="sr-only peer" checked>
                                <div
                                    class="w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[4px] after:left-[10px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#2D5A7B]">
                                </div>
                            </label>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="flex flex-col md:flex-row gap-4">
                            <button type="submit"
                                class="flex-1 bg-[#2D5A7B] text-white py-4 rounded-2xl font-bold hover:bg-[#244a66] shadow-lg shadow-teal-900/10 transition-all flex items-center justify-center gap-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                                Kirim Cerita Sekarang
                            </button>
                            <button type="button"
                                class="px-10 py-4 bg-white border border-gray-200 text-gray-500 rounded-2xl font-bold hover:bg-gray-50 transition-all">
                                Simpan Draft
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Info Tambahan -->
            <div class="mt-8 flex items-center gap-3 text-sm text-gray-400 justify-center">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Data kamu dienkripsi secara aman dalam sistem kami.
            </div>
        </div>
    </div>
@endsection