<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentMethodRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'NamePaymentMethod' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'NamePaymentMethod.required' => 'Tên phương thức thanh toán là bắt buộc.',
            'NamePaymentMethod.string' => 'Tên phương thức thanh toán phải là chuỗi.',
            'NamePaymentMethod.max' => 'Tên phương thức thanh toán không được vượt quá 255 ký tự.',
        ];
    }
}
