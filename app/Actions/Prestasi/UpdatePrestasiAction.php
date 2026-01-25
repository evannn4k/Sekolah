<?php

namespace App\Actions\Prestasi;

use Illuminate\Support\Facades\Storage;

class UpdatePrestasiAction
{
    public function execute($prestasi, $data, $file)
    {
        if ($file) {
            $path = "images/prestasi/";
            $filename = time() . "-" . $file->getClientOriginalName();

            Storage::delete($path . $prestasi->gambar);
            $file->storeAs($path, $filename);

            $data["gambar"] = $filename;
        }

        $data["updated_at"] = now();
        $prestasi->update($data);

        return $prestasi;
    }
}
