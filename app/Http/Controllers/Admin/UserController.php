<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actions\User\CreateUserAction;
use App\Actions\User\DeleteUserAction;
use App\Actions\User\UpdateUserAction;
use App\Http\Requests\Auth\UserCreateRequest;
use App\Http\Requests\Auth\UserUpdateRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderByDesc("created_at")->paginate(10);

        return view("admin.user.index", [
            "users" => $users
        ]);
    }

    public function create()
    {
        return view("admin.user.create");
    }

    public function store(UserCreateRequest $request, CreateUserAction $action)
    {
        $action->execute($request->validated(), $request->file("gambar"));

        return redirect()->route("admin.user.index")->with("success", "Berhasil menambahkan user!!");
    }

    public function edit(User $user)
    {
        return view("admin.user.edit", [
            "user" => $user
        ]);
    }

    public function update(User $user, UserUpdateRequest $request, UpdateUserAction $action)
    {
        $action->execute($user,  $request->validated(), $request->file("gambar"));

        return redirect()->route("admin.user.index")->with("success", "Berhasil mengedit user!!");
    }

    public function delete(User $user, DeleteUserAction $action)
    {
        $action->execute($user);

        return redirect()->route("admin.user.index")->with("success", "Berhasil menghapus user!!");
    }
}
