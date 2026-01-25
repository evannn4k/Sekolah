<?php

namespace App\Actions\GuruStaff;

use App\Models\GuruStaff;
use Illuminate\Support\Facades\Storage;


class DeleteGuruStaffAction
{
    public function execute($guruStaff)
    {
        $path = "images/guru-staff/";

        Storage::delete($path . $guruStaff->foto);

        $guruStaff->delete();

        return $guruStaff;
    }
}
