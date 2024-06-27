<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSizeStrapRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'NameSizeStrap' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'NameSizeStrap.required' => 'Tên kích thước dây là bắt buộc.',
            'NameSizeStrap.string' => 'Tên kích thước dây phải là một chuỗi ký tự.',
            'NameSizeStrap.max' => 'Tên kích thước dây không được vượt quá 255 ký tự.',
        ];
    }
}