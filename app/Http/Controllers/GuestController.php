<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\Banner;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Profil;
use App\Models\Prestasi;
use App\Models\Fasilitas;
use App\Models\GuruStaff;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Requests\Guest\Pesan\GuestPesanStoreRequest;
use App\Http\Requests\Guest\Berita\GuestBeritaSearchRequest;
use Pest\Preset;

class GuestController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        $totalPrestasi = Prestasi::count();
        $totalGuru = GuruStaff::count();
        $beritas = Berita::latest()->take(3)->get();
        $galeris = Galeri::latest()->take(3)->get();
        $banners = Banner::where("status", "aktif")->orderBy("urutan")->get();

        return view("guest.index", [
            "profil" => $profil,
            "totalPrestasi" => $totalPrestasi,
            "totalGuru" => $totalGuru,
            "beritas" => $beritas,
            "galeris" => $galeris,
            "banners" => $banners
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
        $beritas = Berita::latest()->paginate(9);

        return view("guest.berita", [
            "beritas" => $beritas
        ]);
    }
    
    public function detailBerita($slug)
    {
        $berita = Berita::where("slug", $slug)->first();

        $views = $berita->views + 1;
        
        $data = [
            "views" => $views
        ];
        
        $beritas = Berita::orderBy("views")->limit(2)->get();
        $berita->update($data);
        $beritaPopulers = Berita::orderByDesc("views")->take(4)->get();
        
        return view("guest.detail-berita", [
            "beritas" => $beritas,
            "berita" => $berita,
            "beritaPopulers" => $beritaPopulers,
        ]);
    }
    
    public function beritaSearch(Request $request)
    {
        $beritas = Berita::where("judul", "LIKE" ,"%". $request->get('s') ."%")->latest()->paginate(9);
    
        return view("guest.berita", [
            "beritas" => $beritas
        ]);
    }
    
    public function beritaKategori(Request $request)
    {
        $beritas = Berita::where("tags", $request->get('k') )->latest()->paginate(9);
    
        return view("guest.berita", [
            "beritas" => $beritas
        ]);
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

    public function pesan(GuestPesanStoreRequest $request)
    {
        $data = $request->validated();

        Pesan::create($data);

        return redirect()->route("kontak")->with("success", "Berhasil mengirim pesan!!");
    }
}
