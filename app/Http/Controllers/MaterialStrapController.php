<?php

namespace App\Http\Controllers;

use App\Models\MaterialStrap;
use App\Http\Requests\StoreMaterialStrapRequest;
use App\Http\Requests\UpdateMaterialStrapRequest;

class MaterialStrapController extends Controller
{
    public function index()
    {
        $materialStraps = MaterialStrap::all();
        return view('Admin.MaterialStrap', ['materialStraps' => $materialStraps]);
    }

    public function create()
    {
        return view('Admin.AddMaterialStrap');
    }

    public function store(StoreMaterialStrapRequest $request)
    {
        $data = $request->validated();
        MaterialStrap::create($data);
        
        return redirect()->route('materialStraps.index')->with('success', 'Chất liệu dây đã được thêm thành công');
    }

    public function edit(MaterialStrap $materialStrap)
    {
        return view('Admin.EditMaterialStrap', ['materialStrap' => $materialStrap]);
    }

    public function update(UpdateMaterialStrapRequest $request, MaterialStrap $materialStrap)
    {
        $data = $request->validated();
        $materialStrap->update($data);
        
        return redirect()->route('materialStraps.index')->with('success', 'Chất liệu dây đã được cập nhật thành công');
    }

    public function destroy(MaterialStrap $materialStrap)
    {
        $materialStrap->delete();
        return redirect()->route('materialStraps.index')->with('success', 'Chất liệu dây đã được xoá thành công');
    }
}