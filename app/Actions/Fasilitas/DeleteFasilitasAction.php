<?php

namespace App\Actions\Fasilitas;

use Illuminate\Support\Facades\Storage;


class DeleteFasilitasAction
{
    public function execute($fasilitas)
    {
        $path = "images/fasilitas/";

        Storage::delete($path . $fasilitas->gambar);

        $fasilitas->delete();

        return $fasilitas;
    }
}
