<?php

namespace App\Actions\Profil;

use App\Models\Profil;
use Illuminate\Support\Facades\Storage;


class UpdateProfilAction
{
    public function execute($profil, $data, $foto_kepsek, $logo)
    {
        $path = "images/profil/";
        $data["updated_at"] = now();

        if ($foto_kepsek) {
            $filename = time() . "-" . $foto_kepsek->getClientOriginalName();

            Storage::delete($path . $profil->foto_kepsek);
            $foto_kepsek->storeAs($path, $filename);

            $data["foto_kepsek"] = $filename;
        }

        if ($logo) {
            $filename = time() . "-" . $logo->getClientOriginalName();

            Storage::delete($path . $profil->logo);
            $logo->storeAs($path, $filename);

            $data["logo"] = $filename;
        }

        $profil->update($data);

        return $profil;
    }
}
