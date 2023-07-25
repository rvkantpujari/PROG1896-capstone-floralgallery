<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerAddressRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_full_name' => ['required', 'string', 'max:100'],
            'unit' => ['numeric', 'nullable'],
            'street_number' => ['required', 'numeric'],
            'street_name' => ['required', 'string', 'max:120'],
            'city' => ['required', 'string', 'max:100'],
            'postal_code' => ['required', 'regex:/^[ABCEGHJ-NPRSTVXY]\d[ABCEGHJ-NPRSTV-Z][ -]?\d[ABCEGHJ-NPRSTV-Z]\d$/i'],
            'province_id' => ['required'],
        ];
    }
}
