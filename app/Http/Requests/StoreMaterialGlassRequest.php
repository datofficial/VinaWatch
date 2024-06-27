<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMaterialGlassRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'NameMaterialGlass' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'NameMaterialGlass.required' => 'Tên chất liệu mặt kính là bắt buộc.',
            'NameMaterialGlass.string' => 'Tên chất liệu mặt kính phải là một chuỗi ký tự.',
            'NameMaterialGlass.max' => 'Tên chất liệu mặt kính không được vượt quá 255 ký tự.',
        ];
    }
}
