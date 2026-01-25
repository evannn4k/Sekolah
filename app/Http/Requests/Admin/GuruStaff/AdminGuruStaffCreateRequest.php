<?php

namespace App\Http\Requests\Admin\GuruStaff;

use Illuminate\Foundation\Http\FormRequest;

class AdminGuruStaffCreateRequest extends FormRequest
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
            "nama" => "required",
            "nip" => "required",
            "jabatan" => "required",
            "foto" => "required|image|mimes:jpg,jepg,png,jfif,webp|max:2048",
            "urutan" => "required",
        ];
    }
}
