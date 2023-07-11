<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'product_name' => ['required', 'string', 'min: 3'],
            'product_price' => ['required', 'numeric'],
            'product_desc' => ['required', 'string'],
            'product_images.0' => ['required', 'mimes:jpeg,jpg,png,JPEG,JPG,PNG', 'min:100', 'max:5120'],
            'product_images.1' => ['mimes:jpeg,jpg,png,JPEG,JPG,PNG', 'min:100', 'max:5120'],
            'product_images.2' => ['mimes:jpeg,jpg,png,JPEG,JPG,PNG', 'min:100', 'max:5120'],
            'product_images.3' => ['mimes:jpeg,jpg,png,JPEG,JPG,PNG', 'min:100', 'max:5120'],
            'product_status' => ['required', 'string'],
            'category_id' => ['required'],
            'seller_id' => ['required'],
        ];
    }
}
