<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StylePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'style_name' => 'required|max:50',
            'style_image' => 'max:2048',
            'style_description' => 'required|max:65535',
            'category_id' => 'required'
        ];
    }
}
