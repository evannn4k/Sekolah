<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "username" => "admin",
            "nama_lengkap" => "administrasi sekolah",
            "email" => "admin@gmail.com",
            "role" => "admin",
            "password" => bcrypt("admin"),
            "gambar" => "default.jfif",
        ]);
    }
}
