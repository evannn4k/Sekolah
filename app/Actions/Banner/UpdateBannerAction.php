<?php

namespace App\Actions\Banner;

use Illuminate\Support\Facades\Storage;

class UpdateBannerAction
{
    public function execute($banner, $data, $file)
    {
        if ($file) {
            $path = "images/banner/";

            Storage::delete($path . $banner->gambar);

            $filename = time() . "-" . $file->getClientOriginalName();
            $file->storeAs($path, $filename);

            $data["gambar"] = $filename;
        }

        $data["updated_at"] = now();
        $banner->update($data);

        return $banner;
    }
}
