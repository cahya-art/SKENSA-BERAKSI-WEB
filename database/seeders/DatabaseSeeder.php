<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat Akun Superadmin Otomatis
        User::create([
            'name' => 'Super Admin Skensa',
            'nis' => 'ADMIN001', 
            'email' => 'admin@skensa.sch.id',
            'password' => Hash::make('passwordadmin123'), 
            'role' => 'admin',
        ]);

        $this->call([
            SiswaMasterSeeder::class, // Jalankan ini pertama untuk isi data induk siswa 
        ]);
    }
}