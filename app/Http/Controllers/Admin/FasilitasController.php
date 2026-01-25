<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fasilitas;
use App\Http\Controllers\Controller;
use App\Actions\Fasilitas\CreateFasilitasAction;
use App\Actions\Fasilitas\DeleteFasilitasAction;
use App\Actions\Fasilitas\UpdateFasilitasAction;
use App\Http\Requests\Admin\Fasilitas\AdminFasilitasCreateRequest;
use App\Http\Requests\Admin\Fasilitas\AdminFasilitasUpdateRequest;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitases = Fasilitas::all();

        return view("admin.fasilitas.index", [
            "fasilitases" => $fasilitases
        ]);
    }

    public function create()
    {
        return view("admin.fasilitas.create");
    }

    public function store(AdminFasilitasCreateRequest $request, CreateFasilitasAction $action)
    {
        $action->execute($request->validated(), $request->file("gambar"));

        return redirect()->route("admin.fasilitas.index")->with("success", "Berhasil menambahkan fasilitas!!");
    }

    public function edit(Fasilitas $fasilitas)
    {
        return view("admin.fasilitas.edit", [
            "fasilitas" => $fasilitas
        ]);
    }

    public function update(Fasilitas $fasilitas, AdminFasilitasUpdateRequest $request, UpdateFasilitasAction $action)
    {
        $action->execute($fasilitas,  $request->validated(), $request->file("gambar"));

        return redirect()->route("admin.fasilitas.index")->with("success", "Berhasil mengedit fasilitas!!");
    }

    public function delete(Fasilitas $fasilitas, DeleteFasilitasAction $action)
    {
        $action->execute($fasilitas);

        return redirect()->route("admin.fasilitas.index")->with("success", "Berhasil menghapus fasilitas!!");
    }
}
