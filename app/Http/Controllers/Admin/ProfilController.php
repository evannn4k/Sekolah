<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Profil\UpdateProfilAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Profil\AdminProfilUpdateRequest;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::first();

        return view("admin.profil.index", [
            "profil" => $profil
        ]);
    }

    public function update(Profil $profil, AdminProfilUpdateRequest $request, UpdateProfilAction $action)
    {
        $action->execute($profil, $request->validated(), $request->file("foto_kepsek"));
        
        return redirect()->route("admin.profil.index")->with("success", "Berhasil mengedit profil!!");
    }
}
