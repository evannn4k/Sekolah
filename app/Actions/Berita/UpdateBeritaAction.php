<?php

namespace App\Actions\Berita;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class UpdateBeritaAction
{
    public function execute($berita, $data, $file)
    {
        $data["slug"] = Str::slug($data["judul"]);
        $data["updated_at"] = now();

        if ($file) {
            $path = "images/berita/";

            Storage::delete($path . $berita->gambar);

            $filename = time() . "-" . $file->getClientOriginalName();

            $file->storeAs($path, $filename);

            $data["gambar"] = $filename;
        }
        $berita->update($data);

        return $berita;
    }
}
