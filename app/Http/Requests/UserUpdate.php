<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdate extends FormRequest
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
            'name' => 'sometimes|nullable|string',
            'email' => [
                'sometimes',
                'nullable',
                'string',
                'email',
                Rule::unique('users', 'email')->ignore($this->route('user')->id),
            ],
            'current_password' => 'sometimes|nullable|string',
            'new_password' => 'sometimes|nullable|string|min:6|confirmed',
        ];
    }
}
