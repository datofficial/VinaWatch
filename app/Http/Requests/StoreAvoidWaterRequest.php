<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAvoidWaterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'NameAvoidWater' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'NameAvoidWater.required' => 'Tên mức độ chống nước là bắt buộc.',
            'NameAvoidWater.string' => 'Tên mức độ chống nước phải là một chuỗi ký tự.',
            'NameAvoidWater.max' => 'Tên mức độ chống nước không được vượt quá 255 ký tự.',
        ];
    }
}