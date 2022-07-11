<?php

namespace App\Admin\Requests\Portfolio;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioTechnologyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'portfolio_id' => 'required|exists:portfolios,id',
            'name' => 'required|string|min:2|max:255'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
