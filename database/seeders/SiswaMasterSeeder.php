<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Bersihkan data lama di tabel siswa_master agar tidak duplikat
        DB::table('siswa_master')->delete();

        // 2. Data asli dari tabel absensi dengan kolom id, nis, dan nama saja
        $daftarSiswa = [
            ['id' => 1, 'nis' => '32355', 'nama' => 'ALFONDA FREDERICK KARMACENNA RITONGA'],
            ['id' => 2, 'nis' => '32356', 'nama' => 'ANAK AGUNG KOMPYANG AGUNG ARDHINATA SANJAYA'],
            ['id' => 3, 'nis' => '32357', 'nama' => 'ANAK AGUNG LAKSMI BINTANG INDRYANI'],
            ['id' => 4, 'nis' => '32358', 'nama' => 'ANAK AGUNG NGURAH AGUNG KUSUMA YOGA'],
            ['id' => 5, 'nis' => '32359', 'nama' => 'ANINDHITA ANJANI PUTRI KUSUMADJAYA'],
            ['id' => 6, 'nis' => '32360', 'nama' => 'DEWA PUTU KRESNA PUTRA PRATAMA'],
            ['id' => 7, 'nis' => '32361', 'nama' => 'DIEVA NAYZILA PUTRI'],
            ['id' => 8, 'nis' => '32362', 'nama' => 'DIMAS KURNIAWAN HAQIQI'],
            ['id' => 9, 'nis' => '32363', 'nama' => 'FALIHAH NAILATUSY SYARAFAH'],
            ['id' => 10, 'nis' => '32364', 'nama' => 'GEDE PRABHA DANANJAYA'],
            ['id' => 11, 'nis' => '32365', 'nama' => 'GEDE PUTRA WIJAYA'],
            ['id' => 12, 'nis' => '32366', 'nama' => 'I GDE DHARMA SUMANDITHA YASA'],
            ['id' => 13, 'nis' => '32367', 'nama' => 'I GEDE SASTRA WIGUNA'],
            ['id' => 14, 'nis' => '32368', 'nama' => 'I GUSTI AGUNG MADE DAMMA ARIKUSUMA'],
            ['id' => 15, 'nis' => '32369', 'nama' => 'I GUSTI AYU ARI MARCELLA SETIAWAN'],
            ['id' => 16, 'nis' => '32370', 'nama' => 'I KADEK READY UDIYANA PRIANANDA'],
            ['id' => 17, 'nis' => '32371', 'nama' => 'I KETUT MARGAYU SINARTHA'],
            ['id' => 18, 'nis' => '32372', 'nama' => 'I KOMANG AGUS ANGGARA DIPA'],
            ['id' => 19, 'nis' => '32373', 'nama' => 'I KOMANG ARYA PUTRA WIDNYANA'],
            ['id' => 20, 'nis' => '32374', 'nama' => 'I KOMANG WIDI ASTAWA JAYA'],
            ['id' => 21, 'nis' => '32375', 'nama' => 'I MADE ADIPUTRA SEDANA'],
            ['id' => 22, 'nis' => '32376', 'nama' => 'I MADE DANUYASA'],
            ['id' => 23, 'nis' => '32377', 'nama' => 'I MADE OKTA DWI SAMIARTHA'],
            ['id' => 24, 'nis' => '32378', 'nama' => 'I NYOMAN ARTA SUPUTRA'],
            ['id' => 25, 'nis' => '32379', 'nama' => 'I PUTU BAGUS WIKANANDA'],
            ['id' => 26, 'nis' => '32380', 'nama' => 'I PUTU EGI KRISNANTA'],
            ['id' => 27, 'nis' => '32381', 'nama' => 'I PUTU RADISTHYANA PARAMARTA'],
            ['id' => 28, 'nis' => '32382', 'nama' => 'I WAYAN TRIJATA ANANDA PUTRA'],
            ['id' => 29, 'nis' => '32383', 'nama' => 'IDA AYU ANGGIE ARISTYA NARESWARI'],
            ['id' => 30, 'nis' => '32384', 'nama' => 'IDA BAGUS MAS CANDRA WIBAWA'],
            ['id' => 31, 'nis' => '32385', 'nama' => 'IDA BAGUS PUTU SANJAYA'],
            ['id' => 32, 'nis' => '32386', 'nama' => 'KADEK AGUS ARYA PRANATA'],
            ['id' => 33, 'nis' => '32387', 'nama' => 'KADEK JAYA PRATAMA TANUWIBAWA'],
            ['id' => 34, 'nis' => '32388', 'nama' => 'M. RAFI ANWAR'],
            ['id' => 35, 'nis' => '32389', 'nama' => 'MOCH ILHAM FATHUROHMAN ISWAHYUDI'],
            ['id' => 36, 'nis' => '32390', 'nama' => 'NADILLA UDAYANI'],
            ['id' => 37, 'nis' => '32391', 'nama' => 'NI KADEK SRI DEVI DHARMANING PUTRI'],
            ['id' => 38, 'nis' => '32392', 'nama' => 'NI MADE DINDA PUTRI SURANDINA'],
            ['id' => 39, 'nis' => '32393', 'nama' => 'NI PUTU SRIE CAHYA WULANDARI'],
            ['id' => 40, 'nis' => '32394', 'nama' => 'PANDE PUTU JANMAJYESTHA KHUSWANTA'],
            ['id' => 41, 'nis' => '32395', 'nama' => 'PUTU MEYTA SASKYA PUTRI'],
            ['id' => 42, 'nis' => '32396', 'nama' => 'RIZKY RAMADHAN'],
            ['id' => 43, 'nis' => '32397', 'nama' => 'SURYA NUR HARDIWAN SAPUTRA'],
        ];

        // 3. Tambahkan otomatis timestamps (created_at & updated_at) ke setiap baris data siswa
        foreach ($daftarSiswa as &$siswa) {
            $siswa['created_at'] = now();
            $siswa['updated_at'] = now();
        }

        // 4. Masukkan massal semua data ke tabel siswa_master
        DB::table('siswa_master')->insert($daftarSiswa);
    }
}