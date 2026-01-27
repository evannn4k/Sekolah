<?php

namespace App\Http\Requests\Guru\Berita;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class GuruBeritaUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return (Auth::guard("guru")->check()) ? true : false;
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
            "konten" => "required",
            "gambar" => "image|mimes:jpeg,jpg,png,gif,webp,jfif|max:2048",
            "tags" => "required",
            "penulis" => "required",
            "tanggal_publish" => "required",
        ];
    }
}
