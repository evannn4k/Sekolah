<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            $judul = "Judul Berita Ke-" . $i;

            DB::table('beritas')->insert([
                'judul' => $judul,
                'slug' => Str::slug($judul) . '-' . $i,
                'konten' => 'Ini adalah konten berita ke-' . $i . '. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'gambar' => 'berita' . $i . '.jpg',
                'tags' => 'pendidikan, sekolah, informasi',
                'penulis' => 'Admin',
                'tanggal_publish' => now()->subDays(rand(0, 30)),
                'views' => rand(0, 500),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
