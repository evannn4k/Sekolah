<?php

namespace App\Actions\Prestasi;

use App\Models\Prestasi;


class CreatePrestasiAction
{
    public function execute($data, $file)
    {
        $path = "images/prestasi";
        $filename = time() ."-". $file->getClientOriginalName();
        $file->storeAs($path, $filename);

        $data["gambar"] = $filename;

        $prestasi = Prestasi::create($data);

        return $prestasi;
    }
}
