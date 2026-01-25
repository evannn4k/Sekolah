<?php

namespace App\Actions\Galeri;

use Illuminate\Support\Facades\Storage;


class DeleteGaleriAction
{
    public function execute($galeri)
    {
        $path = "images/galeri/";

        Storage::delete($path . $galeri->gambar);

        $galeri->delete();

        return $galeri;
    }
}
