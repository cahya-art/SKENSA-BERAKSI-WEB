File Database Master Sekolah:<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('siswa_master', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 50)->unique(); // Indentitas kunci kevalidan NIS sekolah
            $table->string('nama');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('siswa_master');
    }
};