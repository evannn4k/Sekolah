<?php

namespace App\Actions\GuruStaff;

use App\Models\GuruStaff;


class CreateGuruStaffAction
{
    public function execute($data, $file)
    {
        $path = "images/guru-staff";
        $filename = time() ."-". $file->getClientOriginalName();
        $file->storeAs($path, $filename);

        $data["foto"] = $filename;

        $guruStaff = GuruStaff::create($data);

        return $guruStaff;
    }
}
