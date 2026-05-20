<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            // Pastikan ada user_id nullable agar Guest bisa kirim laporan tanpa error
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('judul');
            $table->text('isi_cerita');
            $table->integer('likes_count')->default(0);
            $table->string('kategori')->default('BULLYING');
            $table->string('status')->default('belum ditangani');

            // TAMBAHKAN KOLOM INI AGAR MATCH DENGAN CONTROLLERMU:
            $table->boolean('is_anonymous')->default(1);
            $table->boolean('is_published')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
