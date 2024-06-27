<?php

namespace App\Http\Controllers;

use App\Models\MaterialGlass;
use App\Http\Requests\StoreMaterialGlassRequest;
use App\Http\Requests\UpdateMaterialGlassRequest;

class MaterialGlassController extends Controller
{
    public function index()
    {
        $materialGlasses = MaterialGlass::all();
        return view('Admin.MaterialGlass', ['materialGlasses' => $materialGlasses]);
    }

    public function create()
    {
        return view('Admin.AddMaterialGlass');
    }

    public function store(StoreMaterialGlassRequest $request)
    {
        $data = $request->validated();
        MaterialGlass::create($data);
        
        return redirect()->route('materialGlasses.index')->with('success', 'Chất liệu mặt kính đã được thêm thành công');
    }

    public function edit(MaterialGlass $materialGlass)
    {
        return view('Admin.EditMaterialGlass', ['materialGlass' => $materialGlass]);
    }

    public function update(UpdateMaterialGlassRequest $request, MaterialGlass $materialGlass)
    {
        $data = $request->validated();
        $materialGlass->update($data);
        
        return redirect()->route('materialGlasses.index')->with('success', 'Chất liệu mặt kính đã được cập nhật thành công');
    }

    public function destroy(MaterialGlass $materialGlass)
    {
        $materialGlass->delete();
        return redirect()->route('materialGlasses.index')->with('success', 'Chất liệu mặt kính đã được xoá thành công');
    }
}
