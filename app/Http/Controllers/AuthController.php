<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\AuthVerifyRequest;

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

    public function logout()
    {
        if(Auth::guard("admin")->check()) {
            Auth::guard("admin")->logout();
        } elseif(Auth::guard("guru")->check()) {
            Auth::guard("guru")->logout();
        }

        return redirect()->route("index");
    }
}
