<?php

namespace App\Actions\Fasilitas;

use App\Models\Fasilitas;


class CreateFasilitasAction
{
    public function execute($data, $file)
    {
        $path = "images/fasilitas";
        $filename = time() ."-". $file->getClientOriginalName();
        $file->storeAs($path, $filename);

        $data["gambar"] = $filename;

        $fasilitas = Fasilitas::create($data);

        return $fasilitas;
    }
}
