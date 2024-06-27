<?php

namespace App\Http\Controllers;

use App\Models\AvoidWater;
use App\Http\Requests\StoreAvoidWaterRequest;
use App\Http\Requests\UpdateAvoidWaterRequest;

class AvoidWaterController extends Controller
{
    public function index()
    {
        $avoidWaters = AvoidWater::all();
        return view('Admin.AvoidWater', ['avoidWaters' => $avoidWaters]);
    }

    public function create()
    {
        return view('Admin.AddAvoidWater');
    }

    public function store(StoreAvoidWaterRequest $request)
    {
        $data = $request->validated();
        AvoidWater::create($data);
        
        return redirect()->route('avoidWaters.index')->with('success', 'Mức độ chống nước đã được thêm thành công');
    }

    public function edit(AvoidWater $avoidWater)
    {
        return view('Admin.EditAvoidWater', ['avoidWater' => $avoidWater]);
    }

    public function update(UpdateAvoidWaterRequest $request, AvoidWater $avoidWater)
    {
        $data = $request->validated();
        $avoidWater->update($data);
        
        return redirect()->route('avoidWaters.index')->with('success', 'Mức độ chống nước đã được cập nhật thành công');
    }

    public function destroy(AvoidWater $avoidWater)
    {
        $avoidWater->delete();
        return redirect()->route('avoidWaters.index')->with('success', 'Mức độ chống nước nước đã được xoá thành công');
    }
}