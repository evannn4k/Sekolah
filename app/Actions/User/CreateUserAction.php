<?php

namespace App\Actions\User;

use App\Models\User;



class CreateUserAction
{
    public function execute($data, $file)
    {
        $path = "images/user/";
        $filename = time() ."-". $file->getClientOriginalName();
        $file->storeAs($path . $filename);

        $data["gambar"] = $filename;
        $data["password"] = bcrypt($data["password"]);

        $user = User::create($data);

        return $user;
    }
}
