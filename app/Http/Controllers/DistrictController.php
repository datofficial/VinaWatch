<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\City;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index()
    {
        $districts = District::with('city')->get();
        return view('Admin.District', compact('districts'));
    }

    public function create()
    {
        $cities = City::all();
        return view('Admin.AddDistrict', compact('cities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'NameDistrict' => 'required|string|max:255',
            'city_id' => 'required|exists:cities,id',
        ]);

        District::create($request->all());

        return redirect()->route('districts.index')->with('success', 'Quận/Huyện đã được tạo thành công');
    }

    public function edit(District $district)
    {
        $cities = City::all();
        return view('Admin.EditDistrict', compact('district', 'cities'));
    }

    public function update(Request $request, District $district)
    {
        $request->validate([
            'NameDistrict' => 'required|string|max:255',
            'city_id' => 'required|exists:cities,id',
        ]);

        $district->update($request->all());

        return redirect()->route('districts.index')->with('success', 'Quận/Huyện đã được cập nhật thành công');
    }

    public function destroy(District $district)
    {
        $district->delete();
        return redirect()->route('districts.index')->with('success', 'Quận/Huyện đã được xóa thành công');
    }
}
