<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginaction extends FormRequest
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
            'login' => 'required|string',
            'password' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'login.required' => 'فرم نام یا ایمیل خالی است',
            'password.required' => 'فرم پسورد خالی است',
        ];
    }
}
