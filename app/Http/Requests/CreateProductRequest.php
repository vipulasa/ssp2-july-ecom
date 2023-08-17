<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:5'],
            'slug' => ['required'],
            'summary' => ['nullable'],
            'description' => ['nullable'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'integer'],
            'sort_order' => ['required', 'integer'],
            'status' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Hello this is a custom message',
            'title.min' => 'You cannot have a title with less than 5 characters.',
            'slug.required' => 'The product URL field is required.',
            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price field must be a number.',
            'stock.required' => 'The stock field is required.',
            'stock.integer' => 'The stock field must be an integer.',
            'sort_order.required' => 'The sort order field is required.',
            'sort_order.integer' => 'The sort order field must be an integer.',
            'status.required' => 'The status field is required.',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
