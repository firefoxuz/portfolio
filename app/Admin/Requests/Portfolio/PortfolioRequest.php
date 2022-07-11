<?php

namespace App\Admin\Requests\Portfolio;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'type' => 'required|integer|min:1|max:3',
            'project_name' => 'required|string|min:3|max:64',
            'description' => 'required|string|min:3|max:2048',
            'site' => 'required|string|min:3|max:256',
            'date' => 'required|string|min:3|max:32',
            'priority' => 'required|int|min:1|max:1000',
        ];
    }


}
