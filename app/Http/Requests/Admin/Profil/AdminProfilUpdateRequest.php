<?php

namespace App\Http\Requests\Admin\Profil;

use Illuminate\Foundation\Http\FormRequest;

class AdminProfilUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nama_sekolah" => "required",
            "alamat" => "required",
            "telepon" => "required",
            "email" => "required|email",
            "npsn" => "required",
            "akreditasi" => "required",
            "sejarah" => "required",
            "visi" => "required",
            "misi" => "required",
            "sambutan_kepsek" => "required",
            "foto_kepsek" => "image|mimes:jpg,jepg,png,jfif,webp|max:2048",
        ];
    }
}
