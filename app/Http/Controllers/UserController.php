<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\City;
use App\Models\District;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Hiển thị danh sách người dùng.
     */
    public function index()
    {
        $users = User::with(['city', 'district', 'ward'])->get();
        return view('Admin.User', compact('users'));
    }

    /**
     * Hiển thị form tạo người dùng mới.
     */
    public function create()
    {
        $cities = City::all();
        return view('Admin.AddUser', compact('cities'));
    }

    /**
     * Lưu người dùng mới vào CSDL.
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request['NameUser'],
            'password' => Hash::make($request['PasswordUser']),
            'PhoneUser' => $request['PhoneUser'],
            'email' => $request['EmailUser'],
            'DOBUser' => $request['DOBUser'],
            'RoleUser' => $request['RoleUser'],
            'IDCity' => $request['IDCity'],
            'IDDistrict' => $request['IDDistrict'],
            'IDWard' => $request['IDWard'],
            'Address' => $request['Address'],
        ]);

        return redirect()->route('users.index')->with('success', 'Người dùng đã được tạo thành công.');
    }

    /**
     * Hiển thị chi tiết người dùng cụ thể.
     */
    public function show(User $user)
    {
        // Hiển thị chi tiết người dùng
    }

    /**
     * Hiển thị form chỉnh sửa người dùng.
     */
    public function edit(User $user)
    {
        $cities = City::all();
        $districts = District::where('city_id', $user->IDCity)->get();
        $wards = Ward::where('district_id', $user->IDDistrict)->get();
        return view('Admin.EditUser', compact('user', 'cities', 'districts', 'wards'));
    }

    /**
     * Cập nhật thông tin người dùng.
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'NameUser' => 'required|string|max:255',
            'PasswordUser' => 'nullable|string|min:6',
            'PhoneUser' => 'required|string|max:15|unique:users,PhoneUser,' . $user->id,
            'EmailUser' => 'required|string|email|max:255|unique:users,EmailUser,' . $user->id,
            'DOBUser' => 'required|date',
            'RoleUser' => 'required|string|max:255',
            'IDCity' => 'required|exists:cities,id',
            'IDDistrict' => 'required|exists:districts,id',
            'IDWard' => 'required|exists:wards,id',
            'Address' => 'required|string|max:255',
        ]);

        $user->update([
            'name' => $validated['NameUser'],
            'password' => $request->PasswordUser ? Hash::make($validated['PasswordUser']) : $user->PasswordUser,
            'PhoneUser' => $validated['PhoneUser'],
            'email' => $validated['EmailUser'],
            'DOBUser' => $validated['DOBUser'],
            'RoleUser' => $validated['RoleUser'],
            'IDCity' => $validated['IDCity'],
            'IDDistrict' => $validated['IDDistrict'],
            'IDWard' => $validated['IDWard'],
            'Address' => $validated['Address'],
        ]);

        return redirect()->route('users.index')->with('success', 'Người dùng đã được cập nhật thành công.');
    }

    /**
     * Xóa người dùng.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Người dùng đã được xóa thành công.');
    }

    /**
     * Lấy danh sách quận/huyện theo thành phố (AJAX).
     */
    public function getDistricts($city_id)
    {
        $districts = District::where('city_id', $city_id)->get();
        return response()->json($districts);
    }

    /**
     * Lấy danh sách xã/phường theo quận/huyện (AJAX).
     */
    public function getWards($district_id)
    {
        $wards = Ward::where('district_id', $district_id)->get();
        return response()->json($wards);
    }
}
