<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\AuthVerifyRequest;
use App\Http\Requests\Auth\AuthRegisterRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function verify(AuthVerifyRequest $request)
    {
        $data = $request->validated();

        if (Auth::guard("admin")->attempt(["email" => $data["email"], "password" => $data["password"], "role" => "admin"])) {
            $request->session()->regenerate();
            return redirect()->intended("/admin/dashboard");
        } else if (Auth::guard("guru")->attempt(["email" => $data["email"], "password" => $data["password"], "role" => "guru"])) {
            $request->session()->regenerate();
            return redirect()->intended("/guru/dashboard");
        } else {
            return redirect()->back()->with("error", "Email atau Password salah");
        }
    }
    public function formRegister()
    {
        return view("auth.register");
    }

    public function register(AuthRegisterRequest $request)
    {
        $data = $request->validated();
        $data["role"] = "guru";

        if ($request->hasFile("gambar")) {
            $path = "images/user/";
            $file = $request->file("gambar");
            $filename = time() . "-" . $file->getClientOriginalName();

            $file->storeAs($path, $filename);

            $data["gambar"] = $filename;
        } else {
            $data["gambar"] = "";
        }

        $user = User::create($data);

        if ($user) {
            Auth::guard("guru")->login($user);
            $request->session()->regenerate();

            return redirect()->intended("/guru/dashboard");
        }
    }

    public function logout()
    {
        if (Auth::guard("admin")->check()) {
            Auth::guard("admin")->logout();
        } elseif (Auth::guard("guru")->check()) {
            Auth::guard("guru")->logout();
        }

        return redirect()->route("index");
    }
}
