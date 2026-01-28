<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Profil;
use App\Models\Prestasi;
use App\Models\Fasilitas;
use App\Models\GuruStaff;

class GuestController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->take(3)->get();
        $galeris = Galeri::latest()->take(3)->get();

        return view("guest.index", [
            "beritas" => $beritas,
            "galeris" => $galeris,
        ]);
    }

    public function profil()
    {
        $profil = Profil::first();

        $misis = preg_split("/\r\n|\n|\r/", $profil->misi);

        return view("guest.profil", [
            "profil" => $profil,
            "misis" => $misis,
        ]);
    }

    public function guruStaff()
    {
        $guruStaffs = GuruStaff::orderBy("urutan")->paginate(12);

        return view("guest.guru-staff", [
            "guruStaffs" => $guruStaffs
        ]);
    }

    public function berita()
    {
        $beritas = Berita::latest()->paginate(6);

        return view("guest.berita", [
            "beritas" => $beritas
        ]);
    }

    public function detailBerita(Berita $berita)
    {
        $views = $berita->views + 1;

        $data = [
            "views" => $views
        ];

        $berita->update($data);
        $beritaPopulers = Berita::orderByDesc("views")->take(4)->get();

        return view("guest.detail-berita", [
            "berita" => $berita,
            "beritaPopulers" => $beritaPopulers,
        ]);
    }

    public function beritaSearch()
    {
        
    }

    public function galeri()
    {
        $galeris = Galeri::paginate(9);

        return view("guest.galeri", [
            "galeris" => $galeris
        ]);
    }

    public function prestasi()
    {
        $profil = Profil::first();
        $prestasis = Prestasi::paginate(5);

        return view("guest.prestasi", [
            "profil" => $profil,
            "prestasis" => $prestasis
        ]);
    }

    public function fasilitas()
    {
        $profil = Profil::first();
        $fasilitases = Fasilitas::paginate(5);

        return view("guest.fasilitas", [
            "profil" => $profil,
            "fasilitases" => $fasilitases
        ]);
    }

    public function kontak()
    {
        $profil = Profil::first();

        return view("guest.kontak", [
            "profil" => $profil
        ]);
    }
}
