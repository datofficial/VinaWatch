<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        
        if (request()->wantsJson()) {
            return response()->json($categories, 200, [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        }

        return view("Admin.Category", ["categories" => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.AddCategory");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->validated();
        $category = Category::create($data);
        
        if ($request->wantsJson()) {
            return response()->json($category, 201, [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        }

        return redirect()->route("categories.index")->with('success', 'Danh mục đã được thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        if (request()->wantsJson()) {
            return response()->json($category, 200, [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        }

        return view("Admin.ShowCategory", ["category" => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("Admin.EditCategory", ["category" => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        
        if ($request->wantsJson()) {
            return response()->json($category, 200, [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        }

        return redirect()->route("categories.index")->with('success', 'Danh mục đã được cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        if (request()->wantsJson()) {
            return response()->json(null, 204, [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        }

        return redirect()->route("categories.index")->with('success', 'Danh mục đã được xoá thành công');
    }
}
