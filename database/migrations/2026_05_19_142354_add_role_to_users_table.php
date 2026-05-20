<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Tambahkan NIS setelah kolom name (jika di bawaan belum ada)
            if (!Schema::hasColumn('users', 'nis')) {
                $table->string('nis', 50)->unique()->after('name');
            }
            
            // Kunci role hanya boleh berisi 'admin' atau 'siswa'
            $table->enum('role', ['admin', 'siswa'])->default('siswa')->after('password');
            });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nis', 'role']);
        });
    }
};