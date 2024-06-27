<?php

namespace App\Http\Controllers;

use App\Models\SizeStrap;
use App\Http\Requests\StoreSizeStrapRequest;
use App\Http\Requests\UpdateSizeStrapRequest;

class SizeStrapController extends Controller
{
    public function index()
    {
        $sizeStraps = SizeStrap::all();
        return view('Admin.SizeStrap', ['sizeStraps' => $sizeStraps]);
    }

    public function create()
    {
        return view('Admin.AddSizeStrap');
    }

    public function store(StoreSizeStrapRequest $request)
    {
        $data = $request->validated();
        SizeStrap::create($data);
        
        return redirect()->route('sizeStraps.index')->with('success', 'Kích thước dây đã được thêm thành công');
    }

    public function edit(SizeStrap $sizeStrap)
    {
        return view('Admin.EditSizeStrap', ['sizeStrap' => $sizeStrap]);
    }

    public function update(UpdateSizeStrapRequest $request, SizeStrap $sizeStrap)
    {
        $data = $request->validated();
        $sizeStrap->update($data);
        
        return redirect()->route('sizeStraps.index')->with('success', 'Kích thước dây đã được cập nhật thành công');
    }

    public function destroy(SizeStrap $sizeStrap)
    {
        $sizeStrap->delete();
        return redirect()->route('sizeStraps.index')->with('success', 'Kích thước dây đã được xoá thành công');
    }
}