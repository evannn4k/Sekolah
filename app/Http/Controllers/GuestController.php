<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Profil;

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
        return view("guest.guru-staff");
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

    public function galeri()
    {
        return view("guest.galeri");
    }

    public function prestasi()
    {
        return view("guest.prestasi");
    }

    public function fasilitas()
    {
        return view("guest.fasilitas");
    }

    public function kontak()
    {
        return view("guest.kontak");
    }
}
