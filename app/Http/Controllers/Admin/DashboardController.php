<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Banner;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Prestasi;
use App\Models\Fasilitas;
use App\Models\GuruStaff;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalUser = User::count();
        $totalGuruStaff = GuruStaff::count();
        $totalBerita = Berita::count();
        $totalGaleri = Galeri::count();
        $totalBanner = Banner::count();
        $totalPrestasi = Prestasi::count();
        $totalFasilitas = Fasilitas::count();

        return view("admin.dashboard", [
            "totalUser" => $totalUser,
            "totalGuruStaff" => $totalGuruStaff,
            "totalBerita" => $totalBerita,
            "totalGaleri" => $totalGaleri,
            "totalBanner" => $totalBanner,
            "totalPrestasi" => $totalPrestasi,
            "totalFasilitas" => $totalFasilitas
        ]);
    }
}
