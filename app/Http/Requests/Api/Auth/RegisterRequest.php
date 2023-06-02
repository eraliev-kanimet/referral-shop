<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => ['bail', 'required', 'email', 'unique:users'],
            'password' => ['bail', 'required', 'confirmed', 'min:8'],
            'phone' => ['bail', 'required', 'number']
        ];
    }

    protected function passedValidation(): void
    {
        $this->replace([
            'password' => Hash::make($this->get('password')),
            'phone' => '+' . $this->get('phone')
        ]);
    }
}
