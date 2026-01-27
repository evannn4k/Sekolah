<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Berita;
use App\Models\Profil;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            ProfilSeeder::class,
            // GuruStaffSeeder::class,
            // BeritaSeeder::class,
            // BannerSeeder::class,
            // GaleriSeeder::class,
            // PrestasiSeeder::class,
            // FasilitasSeeder::class,
        ]);

    }
}
