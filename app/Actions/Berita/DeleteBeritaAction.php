<?php

namespace App\Actions\Berita;

use App\Models\Berita;
use Illuminate\Support\Facades\Storage;


class DeleteBeritaAction
{
    public function execute($berita)
    {
        $path = "images/berita/";
        Storage::delete($path . $berita->gambar);

        $berita->delete();

        return $berita;
    }
}
