<?php

namespace App\Actions\Banner;

use App\Models\Banner;


class CreateBannerAction
{
    public function execute($data, $file)
    {
        $filename = time() ."-". $file->getClientOriginalName();
        $path = "images/banner";
        $file->storeAs($path, $filename);

        $data["gambar"] = $filename;
        $banner = Banner::create($data);

        return $banner;
    }
}
