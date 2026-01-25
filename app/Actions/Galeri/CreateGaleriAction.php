<?php

namespace App\Actions\Galeri;

use App\Models\Galeri;

class CreateGaleriAction
{
    public function execute($data, $file)
    {
        $path = "images/galeri";
        $filename = time() ."-". $file->getClientOriginalName();
        $file->storeAs($path, $filename);

        $data["gambar"] = $filename;

        $guruStaff = Galeri::create($data);

        return $guruStaff;
    }
}
