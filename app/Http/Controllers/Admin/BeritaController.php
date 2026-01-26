<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Berita\UpdateBeritaAction;
use App\Actions\Berita\DeleteBeritaAction;
use App\Actions\Berita\CreateBeritaAction;
use App\Models\Berita;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Berita\AdminBeritaCreateRequest;
use App\Http\Requests\Admin\Berita\AdminBeritaUpdateRequest;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::orderByDesc("created_at")->paginate(10);

        return view("admin.berita.index", [
            "beritas" => $beritas
        ]);
    }

    public function detail(Berita $berita)
    {
        return view("admin.berita.detail", ["berita" => $berita]);
    }

    public function create()
    {
        return view("admin.berita.create");
    }

    public function store(AdminBeritaCreateRequest $request, CreateBeritaAction $action)
    {
        $action->execute($request->validated(), $request->file("gambar"));

        return redirect()->route("admin.berita.index")->with("success", "Berhasil menambahkan berita!!");
        }
        
        public function edit(Berita $berita)
        {
        return view("admin.berita.edit", [
            "berita" => $berita
        ]);
    }

    public function update(Berita $berita, AdminBeritaUpdateRequest $request, UpdateBeritaAction $action)
    {
        $action->execute($berita, $request->validated(), $request->file("gambar"));
        
        return redirect()->route("admin.berita.index")->with("success", "Berhasil mengedit berita!!");
    }

    public function delete(Berita $berita,DeleteBeritaAction $action)
    {
        $action->execute($berita);
        
        return redirect()->route("admin.berita.index")->with("success", "Berhasil menghapus berita!!");
    }
}
