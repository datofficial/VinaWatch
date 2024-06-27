<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSizeGlassRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'NameSizeGlass' => 'required|string|max:255',
            // Nếu có thêm các thuộc tính khác của SizeGlass, bạn có thể thêm các rule tương ứng tại đây
        ];
    }

    public function messages(): array
    {
        return [
            'NameSizeGlass.required' => 'Tên kích cỡ mặt kính là bắt buộc.',
            'NameSizeGlass.string' => 'Tên kích cỡ mặt kính phải là một chuỗi ký tự.',
            'NameSizeGlass.max' => 'Tên kích cỡ mặt kính không được vượt quá 255 ký tự.',
        ];
    }
}
