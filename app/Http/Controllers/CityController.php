<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view("Admin.City", ["cities" => $cities]);
    }

    public function create()
    {
        return view("Admin.AddCity");
    }

    public function store(Request $request)
    {
        $request->validate([
            'NameCity' => 'required|string|max:255',
        ]);

        City::create($request->all());
        
        return redirect()->route("cities.index")->with('success', 'Thành phố đã được tạo thành công');
    }

    public function show(City $city)
    {
        // return view("Admin.ShowCity", ["city" => $city]);
    }

    public function edit(City $city)
    {
        return view("Admin.EditCity", ["city" => $city]);
    }

    public function update(Request $request, City $city)
    {
        $request->validate([
            'NameCity' => 'required|string|max:255',
        ]);

        $city->update($request->all());
        
        return redirect()->route("cities.index")->with('success', 'Thành phố đã được cập nhật thành công');
    }

    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route("cities.index")->with('success', 'Thành phố đã được xóa thành công');
    }

    public function getDistricts($city_id)
    {
        $districts = City::findOrFail($city_id)->districts()->pluck('NameDistrict', 'id');
        return response()->json($districts);
    }
}
