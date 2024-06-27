<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMaterialStrapRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'NameMaterialStrap' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'NameMaterialStrap.required' => 'Tên chất liệu dây là bắt buộc.',
            'NameMaterialStrap.string' => 'Tên chất liệu dây phải là một chuỗi ký tự.',
            'NameMaterialStrap.max' => 'Tên chất liệu dây không được vượt quá 255 ký tự.',
        ];
    }
}