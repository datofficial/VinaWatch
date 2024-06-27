<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'NameCategory' => 'required|string|max:255',
            'DescriptionCategory' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'NameCategory.required' => 'Tên danh mục là bắt buộc.',
            'NameCategory.string' => 'Tên danh mục phải là một chuỗi ký tự.',
            'NameCategory.max' => 'Tên danh mục không được vượt quá 255 ký tự.',
            'DescriptionCategory.required' => 'Mô tả danh mục là bắt buộc.',
            'DescriptionCategory.string' => 'Mô tả danh mục phải là một chuỗi ký tự.',
        ];
    }
}