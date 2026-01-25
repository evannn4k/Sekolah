<?php

namespace App\Actions\User;

use Illuminate\Support\Facades\Storage;


class DeleteUserAction
{
    public function execute($user)
    {
        $path = "images/user/";
        Storage::delete($path . $user->gambar);

        $user->delete();

        return $user;
    }
}
