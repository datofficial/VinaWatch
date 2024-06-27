<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWatchRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'NameWatch' => 'required|string|max:255',
            'DescriptionWatch' => 'required|string',
            'PriceWatch' => 'required|numeric|min:0',
            'ImageWatch' => 'nullable|image|max:2048',
            'IDManufacturer' => 'required|exists:manufacturers,id',
            'IDCategory' => 'required|exists:categories,id',
        ];
    }

    public function messages()
    {
        return [
            'NameWatch.required' => 'Tên đồng hồ là bắt buộc.',
            'DescriptionWatch.required' => 'Mô tả đồng hồ là bắt buộc.',
            'PriceWatch.required' => 'Giá đồng hồ là bắt buộc.',
            'IDManufacturer.required' => 'Nhà sản xuất là bắt buộc.',
            'IDCategory.required' => 'Danh mục là bắt buộc.',
        ];
    }
}