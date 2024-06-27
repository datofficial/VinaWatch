<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEngineRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'NameEngine' => 'required|string|max:255',
            // Nếu có thêm các thuộc tính khác của Engine, bạn có thể thêm các rule tương ứng tại đây
        ];
    }

    public function messages(): array
    {
        return [
            'NameEngine.required' => 'Tên động cơ là bắt buộc.',
            'NameEngine.string' => 'Tên động cơ phải là một chuỗi ký tự.',
            'NameEngine.max' => 'Tên động cơ không được vượt quá 255 ký tự.',
        ];
    }
}
