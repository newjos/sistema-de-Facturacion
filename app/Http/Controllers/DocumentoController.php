<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;

class DocumentoController extends Controller
{
    public function index()
    {
        $documentos = Documento::all();
        return view('documentos.index', compact('documentos'));
    }

    public function create()
    {
        return view('documentos.create');
    }

    public function store(Request $request)
    {
        Documento::create($request->all());
        return redirect()->route('documentos.index')->with('success', 'Documento creado correctamente');
    }

    public function show($id)
    {
        $documento = Documento::findOrFail($id);
        return view('documentos.show', compact('documento'));
    }

    public function edit($id)
    {
        $documento = Documento::findOrFail($id);
        return view('documentos.edit', compact('documento'));
    }

    public function update(Request $request, $id)
    {
        $documento = Documento::findOrFail($id);
        $documento->update($request->all());
        return redirect()->route('documentos.index')->with('success', 'Documento actualizado correctamente');
    }

    public function destroy($id)
    {
        $documento = Documento::findOrFail($id);
        $documento->delete();
        return redirect()->route('documentos.index')->with('success', 'Documento eliminado correctamente');
    }
}
