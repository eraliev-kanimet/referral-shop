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
            'phone' => ['bail', 'required', 'numeric']
        ];
    }

    public function validated($key = null, $default = null)
    {
        $validated = parent::validated($key, $default);

        if (is_array($validated)) {
            $validated['password'] = Hash::make($validated['password']);
            $validated['phone'] = '+' . $validated['phone'];
        }

        return $validated;
    }
}
