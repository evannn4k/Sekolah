<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GuruStaff;

class GuruStaffSeeder extends Seeder
{   
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 20; $i++) {
            GuruStaff::create([
                'nama' => $faker->name(),
                'nip' => $faker->unique()->numerify('################'), // 16 digit
                'jabatan' => $faker->randomElement(['Guru', 'Staff', 'Kepala Sekolah', 'Wakil Kepala Sekolah']),
                'foto' => 'guru' . $i . '.jpg', // bisa diganti dengan path default
                'urutan' => $i,
            ]);
        }
    }
}
