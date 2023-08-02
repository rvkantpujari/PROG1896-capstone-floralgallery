<?php

namespace App\Http\Requests;

use App\Models\Admin;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SellerProfileUpdateRequest extends FormRequest
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
            'store_name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(Seller::class)->ignore($this->user()->id), 'unique:'.Admin::class, 'unique:'.User::class],
            'secondary_email' => ['email', 'max:255', 'nullable', Rule::unique(Seller::class)->ignore($this->user()->id)],
            'phone' => ['string', 'nullable', 'regex:/^\(\d{3}\)?[\s]?\d{3}[\s.-]?\d{4}$/'],
        ];
    }
}
