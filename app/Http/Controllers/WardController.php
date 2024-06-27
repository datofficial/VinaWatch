<?php

namespace App\Http\Controllers;

use App\Models\Ward;
use App\Models\District;
use Illuminate\Http\Request;

class WardController extends Controller
{
    public function index()
    {
        $wards = Ward::with('district')->get();
        return view('Admin.Ward', compact('wards'));
    }

    public function create()
    {
        $districts = District::all();
        return view('Admin.AddWard', compact('districts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'NameWard' => 'required|string|max:255',
            'district_id' => 'required|exists:districts,id',
        ]);

        Ward::create($request->all());

        return redirect()->route('wards.index')->with('success', 'Xã/Phường đã được tạo thành công');
    }

    public function edit(Ward $ward)
    {
        $districts = District::all();
        return view('Admin.EditWard', compact('ward', 'districts'));
    }

    public function update(Request $request, Ward $ward)
    {
        $request->validate([
            'NameWard' => 'required|string|max:255',
            'district_id' => 'required|exists:districts,id',
        ]);

        $ward->update($request->all());

        return redirect()->route('wards.index')->with('success', 'Xã/Phường đã được cập nhật thành công');
    }

    public function destroy(Ward $ward)
    {
        $ward->delete();
        return redirect()->route('wards.index')->with('success', 'Xã/Phường đã được xóa thành công');
    }
}
