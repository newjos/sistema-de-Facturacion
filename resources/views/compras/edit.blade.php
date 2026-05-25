@extends('template')
@section('title','Editar Compra')
@push('css')
<style>
    #descripcion{
        resize: none;
    }
</style>
@endpush
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Editar Compra</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{route('compras.index')}}">Compras</a></li>
        <li class="breadcrumb-item active">Editar Compra</li>
    </ol>
    <div class="container w-100 border border-3 border-primary round p-4 mt3">
        <form action="{{route('compras.update', $compra->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="proveedore_id" class="form-label">Proveedor:</label>
                    <input type="text" name="proveedore_id" id="proveedore_id" class="form-control" value="{{$compra->proveedore_id}}">
                    @error('proveedore_id')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea name="descripcion" id="descripcion" rows="3" class="form-control">{{$compra->descripcion}}</textarea>
                    @error('descripcion')
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
