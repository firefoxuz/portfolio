<?php

namespace App\Frontend\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'full_name' => 'required|string|min:3|max:128',
            'email' => 'required|email|max:128',
            'message' => 'required|string|min:3|max:4096',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
