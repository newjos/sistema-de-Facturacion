@extends('template')
@section('title','Editar Comprobante')
@push('css')
<style>
    #tipo_comprobante{
        resize: none;
    }
</style>
@endpush
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Editar Comprobante</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{route('comprobantes.index')}}">Comprobantes</a></li>
        <li class="breadcrumb-item active">Editar Comprobante</li>
    </ol>
    <div class="container w-100 border border-3 border-primary round p-4 mt3">
        <form action="{{route('comprobantes.update', $comprobante->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="tipo_comprobante" class="form-label">Tipo:</label>
                    <input type="text" name="tipo_comprobante" id="tipo_comprobante" class="form-control" value="{{$comprobante->tipo_comprobante}}">
                    @error('tipo_comprobante')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="estado" class="form-label">Estado:</label>
                    <select name="estado" id="estado" class="form-control">
                        <option value="1" {{$comprobante->estado ? 'selected' : ''}}>Activo</option>
                        <option value="0" {{!$comprobante->estado ? 'selected' : ''}}>Inactivo</option>
                    </select>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
