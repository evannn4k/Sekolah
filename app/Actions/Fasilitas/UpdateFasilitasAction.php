<?php

namespace App\Actions\Fasilitas;

use Illuminate\Support\Facades\Storage;

class UpdateFasilitasAction
{
    public function execute($fasilitas, $data, $file)
    {
        if ($file) {
            $path = "images/fasilitas/";
            $filename = time() . "-" . $file->getClientOriginalName();

            Storage::delete($path . $fasilitas->gambar);
            $file->storeAs($path, $filename);

            $data["gambar"] = $filename;
        }

        $data["updated_at"] = now();
        $fasilitas->update($data);

        return $fasilitas;
    }
}
