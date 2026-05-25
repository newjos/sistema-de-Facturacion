<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presentacione;

class PresentacioneController extends Controller
{
    public function index()
    {
        $presentaciones = Presentacione::all();
        return view('presentaciones.index', compact('presentaciones'));
    }

    public function create()
    {
        return view('presentaciones.create');
    }

    public function store(Request $request)
    {
        Presentacione::create($request->all());
        return redirect()->route('presentaciones.index')->with('success', 'Presentación creada correctamente');
    }

    public function show($id)
    {
        $presentacione = Presentacione::findOrFail($id);
        return view('presentaciones.show', compact('presentacione'));
    }

    public function edit($id)
    {
        $presentacione = Presentacione::findOrFail($id);
        return view('presentaciones.edit', compact('presentacione'));
    }

    public function update(Request $request, $id)
    {
        $presentacione = Presentacione::findOrFail($id);
        $presentacione->update($request->all());
        return redirect()->route('presentaciones.index')->with('success', 'Presentación actualizada correctamente');
    }

    public function destroy($id)
    {
        $presentacione = Presentacione::findOrFail($id);
        $presentacione->delete();
        return redirect()->route('presentaciones.index')->with('success', 'Presentación eliminada correctamente');
    }
}
