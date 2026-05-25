<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comprobante;

class ComprobanteController extends Controller
{
    public function index()
    {
        $comprobantes = Comprobante::all();
        return view('comprobantes.index', compact('comprobantes'));
    }

    public function create()
    {
        return view('comprobantes.create');
    }

    public function store(Request $request)
    {
        Comprobante::create($request->all());
        return redirect()->route('comprobantes.index')->with('success', 'Comprobante creado correctamente');
    }

    public function show($id)
    {
        $comprobante = Comprobante::findOrFail($id);
        return view('comprobantes.show', compact('comprobante'));
    }

    public function edit($id)
    {
        $comprobante = Comprobante::findOrFail($id);
        return view('comprobantes.edit', compact('comprobante'));
    }

    public function update(Request $request, $id)
    {
        $comprobante = Comprobante::findOrFail($id);
        $comprobante->update($request->all());
        return redirect()->route('comprobantes.index')->with('success', 'Comprobante actualizado correctamente');
    }

    public function destroy($id)
    {
        $comprobante = Comprobante::findOrFail($id);
        $comprobante->delete();
        return redirect()->route('comprobantes.index')->with('success', 'Comprobante eliminado correctamente');
    }
}
