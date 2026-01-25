<?php

namespace App\Http\Requests\Admin\Prestasi;

use Illuminate\Foundation\Http\FormRequest;

class AdminPrestasiCreateRequest extends FormRequest
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
            "nama_prestasi" => "required",
            "tingkat" => "required|in:Sekolah,Kecamatan,Kabupaten,Provinsi,Nasional",
            "juara" => "required",
            "nama_siswa" => "required",
            'tahun' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            "gambar" => "required|image|mimes:jpg,jepg,png,jfif,webp|max:2048",
        ];
    }
}
