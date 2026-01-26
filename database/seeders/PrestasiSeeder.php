<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrestasiSeeder extends Seeder
{
    public function run(): void
    {
        $tingkat = ['Sekolah', 'Kecamatan', 'Kabupaten', 'Provinsi', 'Nasional'];
        $juara = ['Juara 1', 'Juara 2', 'Juara 3', 'Harapan 1'];

        for ($i = 1; $i <= 20; $i++) {
            DB::table('prestasis')->insert([
                'nama_prestasi' => 'Prestasi Akademik ' . $i,
                'tingkat' => $tingkat[array_rand($tingkat)],
                'juara' => $juara[array_rand($juara)],
                'nama_siswa' => 'Siswa ' . $i,
                'tahun' => rand(2018, date('Y')),
                'gambar' => 'prestasi' . $i . '.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
