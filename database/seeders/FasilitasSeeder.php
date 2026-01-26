<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FasilitasSeeder extends Seeder
{
    public function run(): void
    {
        $fasilitas = [
            'Perpustakaan',
            'Laboratorium Komputer',
            'Laboratorium IPA',
            'Lapangan Olahraga',
            'Ruang Kelas',
            'Ruang Guru',
            'UKS',
            'Mushola',
            'Kantin',
            'Aula Sekolah',
        ];

        for ($i = 1; $i <= 20; $i++) {
            DB::table('fasilitas')->insert([
                'nama_fasilitas' => $fasilitas[array_rand($fasilitas)] . ' ' . $i,
                'deskripsi' => 'Fasilitas ini digunakan untuk menunjang kegiatan belajar mengajar di sekolah.',
                'gambar' => 'fasilitas' . $i . '.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
