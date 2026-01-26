<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        $kategori = ['Kegiatan', 'Prestasi', 'Fasilitas', 'Event'];

        for ($i = 1; $i <= 20; $i++) {
            DB::table('galeris')->insert([
                'judul' => 'Galeri ' . $i,
                'deskripsi' => 'Dokumentasi galeri ke-' . $i . ' yang berisi kegiatan dan momen penting.',
                'gambar' => 'galeri' . $i . '.jpg',
                'kategori' => $kategori[array_rand($kategori)],
                'tanggal' => now()->subDays(rand(0, 60)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
