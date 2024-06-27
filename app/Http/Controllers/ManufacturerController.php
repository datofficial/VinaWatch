<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Http\Requests\StoreManufacturerRequest;
use App\Http\Requests\UpdateManufacturerRequest;

class ManufacturerController extends Controller
{
    public function index()
    {
        $manufacturers = Manufacturer::all(); 
        return view('Admin.Manufacturer', ['manufacturers' => $manufacturers]);
    }

    public function create()
    {
        return view('Admin.AddManufacturer');
    }

    public function store(StoreManufacturerRequest $request)
    {
        $data = $request->validated();
        Manufacturer::create($data);
        
        return redirect()->route('manufacturers.index')->with('success', 'Nhà sản xuất đã được thêm thành công');
    }

    public function edit(Manufacturer $manufacturer)
    {
        return view('Admin.EditManufacturer', ['manufacturer' => $manufacturer]);
    }

    public function update(UpdateManufacturerRequest $request, Manufacturer $manufacturer)
    {
        $data = $request->validated();
        $manufacturer->update($data);
        
        return redirect()->route('manufacturers.index')->with('success', 'Nhà sản xuất đã được cập nhật thành công');
    }

    public function destroy(Manufacturer $manufacturer)
    {
        $manufacturer->delete();
        return redirect()->route('manufacturers.index')->with('success', 'Nhà sản xuất đã được xoá thành công');
    }
}