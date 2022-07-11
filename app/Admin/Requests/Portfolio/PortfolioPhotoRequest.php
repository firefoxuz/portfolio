<?php

namespace App\Admin\Requests\Portfolio;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioPhotoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'portfolio_id' => 'required|exists:portfolios,id',
            'photo' => 'required|image'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
