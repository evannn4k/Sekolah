<?php

namespace App\Http\Requests\Guru\GuruStaff;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class GuruGuruStaffCreateRequest extends FormRequest
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
            "nama" => "required",
            "nip" => "required",
            "jabatan" => "required",
            "foto" => "required|image|mimes:jpg,jepg,png,jfif,webp|max:2048",
            "urutan" => "required",
        ];
    }
}
