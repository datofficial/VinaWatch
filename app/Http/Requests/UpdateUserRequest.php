<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $userId = $this->route('user'); // Lấy user ID từ route
        $maxDate = now()->subYears(200)->toDateString(); // Ngày tối đa là 200 năm trước từ ngày hiện tại

        return [
            'NameUser' => 'required|string|max:255',
            'PasswordUser' => 'nullable|string|min:8',
            'PhoneUser' => 'required|string|max:15|unique:users,PhoneUser,' . $userId,
            'EmailUser' => 'required|email|unique:users,EmailUser,' . $userId,
            'DOBUser' => ['required', 'date', 'before_or_equal:' . $maxDate],
            'RoleUser' => 'required|string|max:50',
            'IDWard' => 'required|exists:wards,id',
        ];
    }

    public function messages(): array
    {
        return [
            'NameUser.required' => 'Tên người dùng là bắt buộc.',
            'NameUser.string' => 'Tên người dùng phải là một chuỗi ký tự.',
            'NameUser.max' => 'Tên người dùng không được vượt quá 255 ký tự.',
            'PasswordUser.string' => 'Mật khẩu phải là một chuỗi ký tự.',
            'PasswordUser.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'PhoneUser.required' => 'Số điện thoại là bắt buộc.',
            'PhoneUser.string' => 'Số điện thoại phải là một chuỗi ký tự.',
            'PhoneUser.max' => 'Số điện thoại không được vượt quá 15 ký tự.',
            'PhoneUser.unique' => 'Số điện thoại đã tồn tại.',
            'EmailUser.required' => 'Email là bắt buộc.',
            'EmailUser.email' => 'Email không hợp lệ.',
            'EmailUser.unique' => 'Email đã tồn tại.',
            'DOBUser.required' => 'Ngày sinh là bắt buộc.',
            'DOBUser.date' => 'Ngày sinh không hợp lệ.',
            'DOBUser.before_or_equal' => 'Ngày sinh không hợp lệ.', // Tối đa 200 năm
            'RoleUser.required' => 'Vai trò là bắt buộc.',
            'RoleUser.string' => 'Vai trò phải là một chuỗi ký tự.',
            'RoleUser.max' => 'Vai trò không được vượt quá 50 ký tự.',
            'IDWard.required' => 'IDWard là bắt buộc.',
            'IDWard.exists' => 'IDWard không tồn tại.',
        ];
    }
}
