<?php

namespace App\Http\Controllers\Guru;

use App\Models\GuruStaff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actions\GuruStaff\CreateGuruStaffAction;
use App\Actions\GuruStaff\DeleteGuruStaffAction;
use App\Actions\GuruStaff\UpdateGuruStaffAction;

use App\Http\Requests\Guru\GuruStaff\GuruGuruStaffCreateRequest;
use App\Http\Requests\Guru\GuruStaff\GuruGuruStaffUpdateRequest;

class GuruStaffController extends Controller
{
    public function index()
    {
        $guruStaffs = GuruStaff::orderByDesc("created_at")->paginate(10);
        return view("guru.guru-staff.index", [
            "guruStaffs" => $guruStaffs
        ]);
    }

    public function create()
    {
        return view("guru.guru-staff.create");
    }

    public function store(GuruGuruStaffCreateRequest $request, CreateGuruStaffAction $action)
    {
        $action->execute($request->validated(), $request->file("foto"));

        return redirect()->route("guru.guru-staff.index")->with("success", "Berhasil menambahkan data!!");
    }

    public function edit(GuruStaff $guruStaff)
    {
        return view("guru.guru-staff.edit", [
            "guruStaff" => $guruStaff
        ]);
    }

    public function update(GuruStaff $guruStaff, GuruGuruStaffUpdateRequest $request, UpdateGuruStaffAction $action)
    {
        $action->execute($guruStaff,  $request->validated(), $request->file("foto"));

        return redirect()->route("guru.guru-staff.index")->with("success", "Berhasil mengedit data!!");
    }

    public function delete(GuruStaff $guruStaff, DeleteGuruStaffAction $action)
    {
        $action->execute($guruStaff);

        return redirect()->route("guru.guru-staff.index")->with("success", "Berhasil menghapus data!!");
    }
}
