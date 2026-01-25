<?php

namespace App\Http\Requests\Admin\Banner;

use Illuminate\Foundation\Http\FormRequest;

class AdminBannerUpdateRequest extends FormRequest
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
            "judul" => "required",
            "deskripsi" => "required",
            "gambar" => "image|mimes:jpeg,jpg,png,gif,webp,jfif|max:2048",
            "urutan" => "required",
            "status" => "required",
        ];
    }
}
