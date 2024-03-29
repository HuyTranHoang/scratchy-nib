<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:50'],
            'bio' => ['max:255'],
            'facebook' => ['max:50'],
            'twitter' => ['max:50'],
            'avatar' => ['max:2048'],
            'email' => ['email', 'max:50', Rule::unique(User::class)->ignore($this->user()->user_id,'user_id')],
        ];
    }
}
