<?php

namespace App\Actions\Banner;

use Illuminate\Support\Facades\Storage;

class DeleteBannerAction
{
    public function execute($banner)
    { 
        $path = "images/banner/";
        Storage::delete($path . $banner->gambar);

        $banner->delete();

        return $banner;
    }
}
