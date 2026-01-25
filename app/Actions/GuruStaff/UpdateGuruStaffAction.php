<?php

namespace App\Actions\GuruStaff;

use App\Models\GuruStaff;
use Illuminate\Support\Facades\Storage;


class UpdateGuruStaffAction
{
    public function execute($guruStaff, $data, $file)
    {
        if ($file) {
            $path = "images/guru-staff/";
            $filename = time() . "-" . $file->getClientOriginalName();

            Storage::delete($path . $guruStaff->foto);
            $file->storeAs($path, $filename);

            $data["foto"] = $filename;
        }

        $data["updated_at"] = now();
        $guruStaff->update($data);

        return $guruStaff;
    }
}
