<?php

namespace App\Http\Requests\Admin\Fasilitas;

use Illuminate\Foundation\Http\FormRequest;

class AdminFasilitasCreateRequest extends FormRequest
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
            "nama_fasilitas" => "required",
            "deskripsi" => "required",
            "gambar" => "required|image|mimes:jpg,jepg,png,jfif,webp|max:2048",
        ];
    }
}
