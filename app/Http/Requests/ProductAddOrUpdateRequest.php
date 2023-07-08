<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddOrUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'product_name' => ['required', 'string'],
            'product_price' => ['required', 'string'],
            'product_desc' => ['required', 'string'],
            'product_img1' => ['required', 'mimes:jpeg,jpg,png', 'min:50', 'max:10240'],
            'category_id' => ['required'],
            'seller_id' => ['required'],
        ];
    }
}
