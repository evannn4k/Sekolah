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
        $slug = Str::slug($data["judul"]);
        $counter = 1;

        while(Berita::where("slug", $slug)->exists()) {
            $slug = $slug ."-". $counter;
            $counter++;
        }

        $data["slug"] = $slug;

        $berita = Berita::create($data);

        return $berita;
    }
}
