<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Galeri\DeleteGaleriAction;
use App\Actions\Galeri\CreateGaleriAction;
use App\Actions\Galeri\UpdateGaleriAction;
use App\Models\Galeri;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Galeri\AdminGaleriCreateRequest;
use App\Http\Requests\Admin\Galeri\AdminGaleriUpdateRequest;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();

        return view("admin.galeri.index", [
            "galeris" => $galeris
        ]);
    }

    public function create()
    {
        return view("admin.galeri.create");
    }

    public function store(AdminGaleriCreateRequest $request, CreateGaleriAction $action)
    {
        $action->execute($request->validated(), $request->file("gambar"));

        return redirect()->route("admin.galeri.index")->with("success", "Berhasil menambahkan galeri!!");
    }

    public function edit(Galeri $galeri)
    {
        return view("admin.galeri.edit", [
            "galeri" => $galeri
        ]);
    }

    public function update(Galeri $galeri, AdminGaleriUpdateRequest $request, UpdateGaleriAction $action)
    {
        $action->execute($galeri,  $request->validated(), $request->file("gambar"));

        return redirect()->route("admin.galeri.index")->with("success", "Berhasil mengedit galeri!!");
    }

    public function delete(Galeri $galeri, DeleteGaleriAction $action)
    {
        $action->execute($galeri);

        return redirect()->route("admin.galeri.index")->with("success", "Berhasil menghapus galeri!!");
    }
}
