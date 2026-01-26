<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('banners')->insert([
                'judul' => 'Banner ' . $i,
                'deskripsi' => 'Deskripsi banner ke-' . $i . '. Digunakan untuk slider atau header halaman.',
                'gambar' => 'banner' . $i . '.jpg',
                'urutan' => $i,
                'status' => $i <= 15 ? 'aktif' : 'nonaktif',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
