<?php

namespace App\Http\Controllers\Guru;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actions\Berita\CreateBeritaAction;
use App\Actions\Berita\DeleteBeritaAction;
use App\Actions\Berita\UpdateBeritaAction;
use App\Http\Requests\Guru\Berita\GuruBeritaCreateRequest;
use App\Http\Requests\Guru\Berita\GuruBeritaUpdateRequest;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::orderByDesc("created_at")->paginate(10);

        return view("guru.berita.index", [
            "beritas" => $beritas
        ]);
    }

    public function detail(Berita $berita)
    {
        return view("guru.berita.detail", ["berita" => $berita]);
    }

    public function create()
    {
        return view("guru.berita.create");
    }

    public function store(GuruBeritaCreateRequest $request, CreateBeritaAction $action)
    {
        $action->execute($request->validated(), $request->file("gambar"));

        return redirect()->route("guru.berita.index")->with("success", "Berhasil menambahkan berita!!");
        }
        
        public function edit(Berita $berita)
        {
        return view("guru.berita.edit", [
            "berita" => $berita
        ]);
    }

    public function update(Berita $berita, GuruBeritaUpdateRequest $request, UpdateBeritaAction $action)
    {
        $action->execute($berita, $request->validated(), $request->file("gambar"));
        
        return redirect()->route("guru.berita.index")->with("success", "Berhasil mengedit berita!!");
    }

    public function delete(Berita $berita, DeleteBeritaAction $action)
    {
        $action->execute($berita);
        
        return redirect()->route("guru.berita.index")->with("success", "Berhasil menghapus berita!!");
    }
}
