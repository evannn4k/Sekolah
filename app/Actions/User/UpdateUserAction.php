<?php

namespace App\Actions\User;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\HttpCache\Store;

class UpdateUserAction
{
    public function execute($user, $data, $file)
    {
        if ($file) {
            $path = "images/user/";
            $filename = time() . "-" . $file->getClientOriginalName();

            Storage::delete($path . $user->gambar);
            $file->storeAs($path, $filename);

            $data["gambar"] = $filename;
        }
        
        $data["updated_at"] = now();
        $user->update($data);

        return $user;
    }
}
