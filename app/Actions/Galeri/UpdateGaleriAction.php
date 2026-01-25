<?php

namespace App\Actions\Galeri;

use Illuminate\Support\Facades\Storage;



class UpdateGaleriAction
{
    public function execute($galeri, $data, $file)
    {
        if ($file) {
            $path = "images/galeri/";
            $filename = time() . "-" . $file->getClientOriginalName();

            Storage::delete($path . $galeri->gambar);
            $file->storeAs($path, $filename);

            $data["gambar"] = $filename;
        }

        $data["updated_at"] = now();
        $galeri->update($data);

        return $galeri;
    }
}
