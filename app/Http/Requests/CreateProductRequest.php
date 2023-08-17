<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'slug' => ['required'],
            'summary' => ['nullable'],
            'description' => ['nullable'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'integer'],
            'sort_order' => ['required', 'integer'],
            'status' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
