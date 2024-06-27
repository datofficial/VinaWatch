<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreManufacturerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'NameManufacturer' => 'required|string|max:255',
            'DescriptionManufacturer' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'NameManufacturer.required' => 'Tên nhà sản xuất là bắt buộc.',
            'NameManufacturer.string' => 'Tên nhà sản xuất phải là một chuỗi ký tự.',
            'NameManufacturer.max' => 'Tên nhà sản xuất không được vượt quá 255 ký tự.',
            'DescriptionManufacturer.required' => 'Mô tả nhà sản xuất là bắt buộc.',
            'DescriptionManufacturer.string' => 'Mô tả nhà sản xuất phải là một chuỗi ký tự.',
        ];
    }
}