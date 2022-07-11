<?php

namespace App\Admin\Requests\Experience;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'sub_name' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:3|max:2048',
            'from' => 'required|string|min:3|max:15',
            'to' => 'required|string|min:3|max:15',
        ];
    }
}
