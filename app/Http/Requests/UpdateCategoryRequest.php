<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'NameCategory' => 'required|string|max:255',
            'DescriptionCategory' => 'required|string',
        ];
    }

    /**
     * Get the custom messages for validation errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'NameCategory.required' => 'Tên danh mục là bắt buộc.',
            'NameCategory.string' => 'Tên danh mục phải là một chuỗi ký tự.',
            'NameCategory.max' => 'Tên danh mục không được vượt quá 255 ký tự.',
            'DescriptionCategory.string' => 'Mô tả danh mục phải là một chuỗi ký tự.',
        ];
    }
}