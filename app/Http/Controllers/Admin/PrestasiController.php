<?php

namespace App\Http\Controllers\Admin;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actions\Prestasi\CreatePrestasiAction;
use App\Actions\Prestasi\DeletePrestasiAction;
use App\Actions\Prestasi\UpdatePrestasiAction;
use App\Http\Requests\Admin\Prestasi\AdminPrestasiCreateRequest;
use App\Http\Requests\Admin\Prestasi\AdminPrestasiUpdateRequest;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasis = Prestasi::all();

        return view("admin.prestasi.index", [
            "prestasis" => $prestasis
        ]);
    }

    public function create()
    {
        return view("admin.prestasi.create");
    }

    public function store(AdminPrestasiCreateRequest $request, CreatePrestasiAction $action)
    {
        $action->execute($request->validated(), $request->file("gambar"));

        return redirect()->route("admin.prestasi.index")->with("success", "Berhasil menambahkan prestasi!!");
    }

    public function edit(Prestasi $prestasi)
    {
        return view("admin.prestasi.edit", [
            "prestasi" => $prestasi
        ]);
    }

    public function update(Prestasi $prestasi, AdminPrestasiUpdateRequest $request, UpdatePrestasiAction $action)
    {
        $action->execute($prestasi,  $request->validated(), $request->file("gambar"));

        return redirect()->route("admin.prestasi.index")->with("success", "Berhasil mengedit prestasi!!");
    }

    public function delete(Prestasi $prestasi, DeletePrestasiAction $action)
    {
        $action->execute($prestasi);

        return redirect()->route("admin.prestasi.index")->with("success", "Berhasil menghapus prestasi!!");
    }
}
