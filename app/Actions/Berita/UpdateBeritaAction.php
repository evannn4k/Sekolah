<?php

namespace App\Actions\Berita;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class UpdateBeritaAction
{
    public function execute($berita, $data, $file)
    {
        $slug = Str::slug($data["judul"]);
        $counter = 1;

        while (Berita::where("slug", $slug)->where("id", "!=", $berita->id)->exists()) {
            $slug = $slug . "-" . $counter;
            $counter++;
        }

        $data["slug"] = $slug;
        
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
