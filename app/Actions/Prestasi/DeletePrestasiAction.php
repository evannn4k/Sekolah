<?php

namespace App\Actions\Prestasi;

use Illuminate\Support\Facades\Storage;


class DeletePrestasiAction
{
    public function execute($prestasi)
    {
        $path = "images/prestasi/";

        Storage::delete($path . $prestasi->gambar);

        $prestasi->delete();

        return $prestasi;
    }
}
