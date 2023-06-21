<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class ProductIndexRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'q' => ['nullable', 'string'],
            'page' => ['nullable', 'numeric']
        ];
    }
}
