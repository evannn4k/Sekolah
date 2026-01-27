<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view("guest.index");
    }

    public function profil()
    {
        return view("guest.profil");
    }

    public function guruStaff()
    {
        return view("guest.guru-taff");
    }

    public function berita()
    {
        return view("guest.berita");
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
