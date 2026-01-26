<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use App\Http\Controllers\Controller;
use App\Actions\Banner\CreateBannerAction;
use App\Actions\Banner\DeleteBannerAction;
use App\Actions\Banner\UpdateBannerAction;
use App\Http\Requests\Admin\Banner\AdminBannerCreateRequest;
use App\Http\Requests\Admin\Banner\AdminBannerUpdateRequest;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderByDesc("created_at")->paginate(10);

        return view("admin.banner.index", [
            "banners" => $banners
        ]);
    }

    public function create()
    {
        return view("admin.banner.create");
    }

    public function store(AdminBannerCreateRequest $request, CreateBannerAction $action)
    {
        $action->execute($request->validated(), $request->file("gambar"));

        return redirect()->route("admin.banner.index")->with("success", "Berhasil menambahkan banner!!");
    }

    public function edit(Banner $banner)
    {
        return view("admin.banner.edit", [
            "banner" => $banner
        ]);
    }

    public function update(Banner $banner, AdminBannerUpdateRequest $request, UpdateBannerAction $action)
    {
        $action->execute($banner, $request->validated(), $request->file("gambar"));

        return redirect()->route("admin.banner.index")->with("success", "Berhasil mengedit banner!!");
    }

    public function delete(Banner $banner, DeleteBannerAction $action)
    {
        $action->execute($banner);

        return redirect()->route("admin.banner.index")->with("success", "Berhasil menghapus banner!!");
    }
}
