<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('ceritas', function (Blueprint $table) {
        $table->id();
        // Judul laporan atau cerita
        $table->string('judul'); 
        
        // Isi detail kejadian
        $table->text('isi_cerita'); 
        
        // Kategori perundungan (Fisik, Verbal, Sosmed, dll)
        $table->string('kategori'); 
        
        // Status anonim (Sangat penting untuk privasi siswa)
        $table->boolean('is_anonymous')->default(true); 
        
        // Status laporan (Pending, Diproses, Selesai)
        $table->string('status')->default('pending'); 
        
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ceritas');
    }
};
