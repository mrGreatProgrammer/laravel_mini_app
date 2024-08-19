<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' =>'required|string|max:255',
            'description' =>'required|string|max:1000',
            'phone' =>'required|string|max:255'
            // 'price' =>'required|numeric|min:1',
            // 'quantity' =>'required|integer|min:1',
            // 'category_id' =>'required|exists:categories,id',
            // 'tags' =>'required|array',
            // 'tags.*' => 'exists:tags,id',
            // 'image' =>'required|image|mimes:jpeg,png,jpg|max:2048',
            // 'discount' => 'nullable|numeric|between:0,100',
            // 'is_featured' =>'required|boolean',
            // 'is_active' =>'required|boolean',
            // 'published_at' =>'required|date',
            // 'price' =>'required|numeric|min:1',
            // 'quantity' =>'required|integer|min:1',
            // 'category_id' =>'required|exists:categories,id',
            //
        ];
    }
}
