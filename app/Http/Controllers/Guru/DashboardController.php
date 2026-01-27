<?php

namespace App\Http\Controllers\Guru;

use App\Models\Berita;
use App\Models\GuruStaff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalGuruStaff = GuruStaff::count();
        $totalBerita = Berita::count();

        return view("guru.dashboard", [
            "totalGuruStaff" => $totalGuruStaff,
            "totalBerita" => $totalBerita
        ]);
    }
}
