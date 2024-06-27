<?php

namespace App\Http\Controllers;

use App\Models\Engine;
use App\Http\Requests\StoreEngineRequest;
use App\Http\Requests\UpdateEngineRequest;

class EngineController extends Controller
{
    public function index()
    {
        $engines = Engine::all();
        return view('Admin.Engine', ['engines' => $engines]);
    }

    public function create()
    {
        return view('Admin.AddEngine');
    }

    public function store(StoreEngineRequest $request)
    {
        $data = $request->validated();
        Engine::create($data);
        
        return redirect()->route('engines.index')->with('success', 'Động cơ đã được thêm thành công');
    }

    public function edit(Engine $engine)
    {
        return view('Admin.EditEngine', ['engine' => $engine]);
    }

    public function update(UpdateEngineRequest $request, Engine $engine)
    {
        $data = $request->validated();
        $engine->update($data);
        
        return redirect()->route('engines.index')->with('success', 'Động cơ đã được cập nhật thành công');
    }

    public function destroy(Engine $engine)
    {
        $engine->delete();
        return redirect()->route('engines.index')->with('success', 'Động cơ đã được xoá thành công');
    }
}
