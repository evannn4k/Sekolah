<?php

namespace App\Actions\Profil;

use App\Models\Profil;
use Illuminate\Support\Facades\Storage;


class UpdateProfilAction
{
    public function execute($profil, $data, $file)
    {
        $path = "images/profil/";
        $data["updated_at"] = now();

        if ($file) {
            $filename = time() . "-" . $file->getClientOriginalName();

            Storage::delete($path . $profil->foto_kepsek);
            $file->storeAs($path, $filename);

            $data["foto_kepsek"] = $filename;
        }
        $profil->update($data);

        return $profil;
    }
}
