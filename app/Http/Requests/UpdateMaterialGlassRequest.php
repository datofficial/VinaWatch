<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMaterialGlassRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'NameMaterialGlass' => 'required|string|max:255',
            // Nếu có thêm các thuộc tính khác của MaterialGlass, bạn có thể thêm các rule tương ứng tại đây
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
