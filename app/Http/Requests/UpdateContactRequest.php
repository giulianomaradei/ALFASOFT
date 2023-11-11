<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:6',
            'contact' => 'required|string|size:9',
        ];
    }
}
