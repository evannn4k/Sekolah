<?php

namespace App\Actions\Berita;

use App\Models\Berita;
use Illuminate\Support\Str;


class CreateBeritaAction
{
    public function execute($data, $file)
    {
        $filename = time() . "-" . $file->getClientOriginalName();

        $path = "images/berita/";
        $file->storeAs($path, $filename);

        $data["gambar"] = $filename;
        $data["slug"] = Str::slug($data["judul"]);

        $berita = Berita::create($data);

        return $berita;
    }
}
