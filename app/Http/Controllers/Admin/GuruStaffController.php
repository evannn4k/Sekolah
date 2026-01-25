<?php

namespace App\Http\Controllers\Admin;

use App\Models\GuruStaff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actions\GuruStaff\CreateGuruStaffAction;
use App\Actions\GuruStaff\DeleteGuruStaffAction;
use App\Actions\GuruStaff\UpdateGuruStaffAction;
use App\Http\Requests\Admin\GuruStaff\AdminGuruStaffCreateRequest;
use App\Http\Requests\Admin\GuruStaff\AdminGuruStaffUpdateRequest;

class GuruStaffController extends Controller
{
    public function index()
    {
        $guruStaffs = GuruStaff::all();
        return view("admin.guru-staff.index", [
            "guruStaffs" => $guruStaffs    
        ]);
    }

    public function create()
    {
        return view("admin.guru-staff.create");
    }

    public function store(AdminGuruStaffCreateRequest $request, CreateGuruStaffAction $action)
    {
        $action->execute($request->validated(), $request->file("foto"));

        return redirect()->route("admin.guru-staff.index")->with("success", "Berhasil menambahkan data!!");
    }

    public function edit(GuruStaff $guruStaff)
    {
        return view("admin.guru-staff.edit", [
            "guruStaff" => $guruStaff
        ]);
    }

    public function update(GuruStaff $guruStaff, AdminGuruStaffUpdateRequest $request, UpdateGuruStaffAction $action)
    {
        $action->execute($guruStaff,  $request->validated(), $request->file("foto"));

        return redirect()->route("admin.guru-staff.index")->with("success", "Berhasil mengedit data!!");
    }

    public function delete(GuruStaff $guruStaff, DeleteGuruStaffAction $action)
    {
        $action->execute($guruStaff);

        return redirect()->route("admin.guru-staff.index")->with("success", "Berhasil menghapus data!!");
    }
}
