<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Http\Requests\ModuleRequest;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modulos = Module::latest()->paginate(5);
        return view('admin.modules.index', compact('modulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modulo = new Module();
        return view('admin.modules.create', compact('modulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModuleRequest $request)
    {
        $input = $request->all();
        Module::create($input);
        return redirect()->route('modules.index')->with('status', 'Módulo de vacunación creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $modulo)
    {
        return view('admin.modules.show', compact('modulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $modulo)
    {
        return view('admin.modules.edit', compact('modulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(ModuleRequest $request, Module $modulo)
    {
        $input = $request->all();
        $modulo->update($input);
        return redirect()->route('modules.index')->with('status', 'Módulo de vacunación modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $modulo)
    {
        $modulo->delete();
        return redirect()->route('modules.index')->with('status', 'Módulo de vacunación eliminado con éxito');
    }
}
