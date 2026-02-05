<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profil::create([
            'nama_sekolah' => '',
            'alamat' => '',
            'telepon' => '',
            'email' => '',
            'npsn' => '',
            'akreditasi' => '',
            'sejarah' => '',
            'visi' => '',
            'misi' => '',
            'sambutan_kepsek' => '',
            'nama_kepsek' => '',
            'foto_kepsek' => '',
            'judul_tentang_sekolah' => '',
            'tentang_sekolah' => '',
            'logo' => '',
            'jam_kerja' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
