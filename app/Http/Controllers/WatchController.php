<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use App\Models\Manufacturer;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Hiển thị danh sách đồng hồ
        $watches = Watch::with(['manufacturer', 'category'])->get();
        return view('Admin.Watch', compact('watches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Hiển thị form thêm đồng hồ mới
        $manufacturers = Manufacturer::all();
        $categories = Category::all();
        return view('Admin.AddWatch', compact('manufacturers', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Lưu đồng hồ mới vào CSDL
        $validated = $request->validate([
            'NameWatch' => 'required|string|max:255',
            'DescriptionWatch' => 'required|string', // Không được bỏ trống Mô tả
            'PriceWatch' => 'required|numeric|min:0', // Bắt buộc là số dương
            'ImageWatch' => 'required|image|max:2048', 
            'IDManufacturer' => 'required|exists:manufacturers,id', // Bắt buộc yêu cầu ID
            'IDCategory' => 'required|exists:categories,id', // Bắt buộc yêu cầu ID
        ]);

        $imagePath = $request->file('ImageWatch')->store('watches', 'public');

        Watch::create([
            'NameWatch' => $validated['NameWatch'],
            'DescriptionWatch' => $validated['DescriptionWatch'],
            'PriceWatch' => $validated['PriceWatch'],
            'ImageWatch' => $imagePath,
            'IDManufacturer' => $validated['IDManufacturer'],
            'IDCategory' => $validated['IDCategory'],
        ]);

        return redirect()->route('watches.index')->with('success', 'Đồng hồ đã được tạo thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Watch $watch)
    {
        // Hiển thị chi tiết một đồng hồ cụ thể
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Watch $watch)
    {
        // Hiển thị form chỉnh sửa đồng hồ
        $manufacturers = Manufacturer::all();
        $categories = Category::all();
        return view('Admin.EditWatch', compact('watch', 'manufacturers', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Watch $watch)
    {
        // Cập nhật thông tin đồng hồ
        $validated = $request->validate([
            'NameWatch' => 'required|string|max:255',
            'DescriptionWatch' => 'required|string',
            'PriceWatch' => 'required|numeric|min:0',
            'ImageWatch' => 'nullable|image|max:2048',
            'IDManufacturer' => 'required|exists:manufacturers,id',
            'IDCategory' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('ImageWatch')) {
            Storage::disk('public')->delete($watch->ImageWatch);
            $imagePath = $request->file('ImageWatch')->store('watches', 'public');
        } else {
            $imagePath = $watch->ImageWatch;
        }

        $watch->update([
            'NameWatch' => $validated['NameWatch'],
            'DescriptionWatch' => $validated['DescriptionWatch'],
            'PriceWatch' => $validated['PriceWatch'],
            'ImageWatch' => $imagePath,
            'IDManufacturer' => $validated['IDManufacturer'],
            'IDCategory' => $validated['IDCategory'],
        ]);

        return redirect()->route('watches.index')->with('success', 'Đồng hồ đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Watch $watch)
    {
        // Xoá đồng hồ
        Storage::disk('public')->delete($watch->ImageWatch);
        $watch->delete();
        return redirect()->route('watches.index')->with('success', 'Đồng hồ đã được xóa thành công.');
    }
}