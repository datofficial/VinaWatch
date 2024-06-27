<?php

namespace App\Http\Controllers;

use App\Models\SizeGlass;
use App\Http\Requests\StoreSizeGlassRequest;
use App\Http\Requests\UpdateSizeGlassRequest;

class SizeGlassController extends Controller
{
    public function index()
    {
        $sizeGlasses = SizeGlass::all();
        return view('Admin.SizeGlass', ['sizeGlasses' => $sizeGlasses]);
    }

    public function create()
    {
        return view('Admin.AddSizeGlass');
    }

    public function store(StoreSizeGlassRequest $request)
    {
        $data = $request->validated();
        SizeGlass::create($data);
        
        return redirect()->route('sizeGlasses.index')->with('success', 'Kích cỡ mặt kính đã được thêm thành công');
    }

    public function edit(SizeGlass $sizeGlass)
    {
        return view('Admin.EditSizeGlass', ['sizeGlass' => $sizeGlass]);
    }

    public function update(UpdateSizeGlassRequest $request, SizeGlass $sizeGlass)
    {
        $data = $request->validated();
        $sizeGlass->update($data);
        
        return redirect()->route('sizeGlasses.index')->with('success', 'Kích cỡ mặt kính đã được cập nhật thành công');
    }

    public function destroy(SizeGlass $sizeGlass)
    {
        $sizeGlass->delete();
        return redirect()->route('sizeGlasses.index')->with('success', 'Kích cỡ mặt kính đã được xoá thành công');
    }
}
