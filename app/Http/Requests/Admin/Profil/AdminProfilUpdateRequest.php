<?php

namespace App\Http\Requests\Admin\Profil;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class AdminProfilUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return (Auth::guard("admin")->check()) ? true : false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nama_sekolah" => "",
            "alamat" => "",
            "telepon" => "",
            "email" => "email",
            "npsn" => "",
            "akreditasi" => "",
            "sejarah" => "",
            "visi" => "",
            "misi" => "",
            "sambutan_kepsek" => "",
            "nama_kepsek" => "",
            "foto_kepsek" => "image|mimes:jpg,jepg,png,jfif,webp|max:2048",
            "nama_tentang_sekolah" => "",
            "tentang_sekolah" => "",
            "logo" => "image|mimes:jpg,jepg,png,jfif,webp|max:2048",
            "jam_kerja" => "",
        ];
    }
}
