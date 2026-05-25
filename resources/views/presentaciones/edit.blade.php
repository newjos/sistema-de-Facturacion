@extends('template')
@section('title','Editar Presentación')
@push('css')
<style>
    #nombre{
        resize: none;
    }
</style>
@endpush
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Editar Presentación</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{route('presentaciones.index')}}">Presentaciones</a></li>
        <li class="breadcrumb-item active">Editar Presentación</li>
    </ol>
    <div class="container w-100 border border-3 border-primary round p-4 mt3">
        <form action="{{route('presentaciones.update', $presentacione->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{$presentacione->nombre}}">
                    @error('nombre')
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
