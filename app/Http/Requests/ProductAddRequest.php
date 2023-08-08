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
            'product_name' => ['required', 'string', 'min: 3', 'max:100'],
            'product_price' => ['required', 'numeric'],
            'product_desc' => ['required', 'string', 'min:250', 'max:1000'],
            'product_images.0' => ['required', 'mimes:jpeg,jpg,png,JPEG,JPG,PNG', 'min:50', 'max:2048'],
            'product_images.1' => ['mimes:jpeg,jpg,png,JPEG,JPG,PNG', 'min:50', 'max:2048'],
            'product_images.2' => ['mimes:jpeg,jpg,png,JPEG,JPG,PNG', 'min:50', 'max:2048'],
            'product_images.3' => ['mimes:jpeg,jpg,png,JPEG,JPG,PNG', 'min:50', 'max:2048'],
            'product_status' => ['required', 'string'],
            'category_id' => ['required'],
            'seller_id' => ['required'],
        ];
    }
}
