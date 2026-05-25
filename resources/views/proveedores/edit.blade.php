@extends('template')
@section('title','Editar Proveedor')
@push('css')
<style>
    #razon_social{
        resize: none;
    }
</style>
@endpush
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Editar Proveedor</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{route('proveedores.index')}}">Proveedores</a></li>
        <li class="breadcrumb-item active">Editar Proveedor</li>
    </ol>
    <div class="container w-100 border border-3 border-primary round p-4 mt3">
        <form action="{{route('proveedores.update', $proveedor->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="razon_social" class="form-label">Razón Social:</label>
                    <input type="text" name="razon_social" id="razon_social" class="form-control" value="{{$proveedor->persona->razon_social ?? ''}}">
                    @error('razon_social')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
