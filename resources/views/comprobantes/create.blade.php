@extends('template')
@section('title','Crear Comprobante')
@push('css')
<style>
    #tipo_comprobante{
        resize: none;
    }
</style>
@endpush
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Crear Comprobante</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{route('comprobantes.index')}}">Comprobantes</a></li>
        <li class="breadcrumb-item active">Crear Comprobante</li>
    </ol>
    <div class="container w-100 border border-3 border-primary round p-4 mt3">
        <form action="{{route('comprobantes.store')}}" method="post">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="tipo_comprobante" class="form-label">Tipo:</label>
                    <input type="text" name="tipo_comprobante" id="tipo_comprobante" class="form-control" value="{{old('tipo_comprobante')}}">
                    @error('tipo_comprobante')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="estado" class="form-label">Estado:</label>
                    <select name="estado" id="estado" class="form-control">
                        <option value="1" selected>Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
