<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Hiển thị danh sách các thành phố.
     */
    public function index()
    {
        $cities = City::all();
        return view("Admin.City", ["cities" => $cities]);
    }

    /**
     * Hiển thị form để tạo thành phố mới.
     */
    public function create()
    {
        return view("Admin.AddCity");
    }

    /**
     * Lưu trữ một thành phố mới vào cơ sở dữ liệu.
     */
    public function store(Request $request)
    {
        $request->validate([
            'NameCity' => 'required|string|max:255',
        ]);

        City::create($request->all());
        
        return redirect()->route("cities.index")->with('success', 'Thành phố đã được tạo thành công');
    }

    /**
     * Hiển thị thông tin chi tiết của một thành phố.
     */
    public function show(City $city)
    {
        // return view("Admin.ShowCity", ["city" => $city]);
    }

    /**
     * Hiển thị form để chỉnh sửa một thành phố.
     */
    public function edit(City $city)
    {
        return view("Admin.EditCity", ["city" => $city]);
    }

    /**
     * Cập nhật thông tin của một thành phố trong cơ sở dữ liệu.
     */
    public function update(Request $request, City $city)
    {
        $request->validate([
            'NameCity' => 'required|string|max:255',
        ]);

        $city->update($request->all());
        
        return redirect()->route("cities.index")->with('success', 'Thành phố đã được cập nhật thành công');
    }

    /**
     * Xóa một thành phố khỏi cơ sở dữ liệu.
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route("cities.index")->with('success', 'Thành phố đã được xóa thành công');
    }
}
