<?php

namespace App\Http\Requests;

use App\Models\Admin;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['string', 'max:255'],
            'middle_name' => ['string', 'nullable', 'max:255'],
            'last_name' => ['string', 'max:255'],
            'dob' => ['date', 'nullable'],
            'email' => ['email', 'max:255', Rule::unique(Admin::class)->ignore($this->user()->id)],
            'secondary_email' => ['email', 'max:255', 'nullable', Rule::unique(Admin::class)->ignore($this->user()->id)],
            'phone' => ['string', 'nullable', 'regex:/^\(\d{3}\)?[\s]?\d{3}[\s.-]?\d{4}$/'],
        ];
    }
}
