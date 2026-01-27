<?php

namespace App\Http\Requests\Admin\Galeri;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class AdminGaleriUpdateRequest extends FormRequest
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
            "judul" => "required",
            "deskripsi" => "required",
            "gambar" => "image|mimes:jpg,jepg,png,jfif,webp|max:2048",
            "kategori" => "required",
            "tanggal" => "required",
        ];
    }
}
