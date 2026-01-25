<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            "username" => "required",
            "nama_lengkap" => "required",
            "email" => "required|email",
            "role" => "required",
            "password" => "required",
            "gambar" => "required|image|mimes:jpeg,jpg,png,gif,webp,jfif|max:2048"
        ];
    }
}
