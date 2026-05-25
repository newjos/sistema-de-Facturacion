@extends('template')
@section('title','Crear Persona')
@push('css')
<style>
    #razon_social{
        resize: none;
    }
</style>
@endpush
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Crear Persona</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{route('personas.index')}}">Personas</a></li>
        <li class="breadcrumb-item active">Crear Persona</li>
    </ol>
    <div class="container w-100 border border-3 border-primary round p-4 mt3">
        <form action="{{route('personas.store')}}" method="post">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="razon_social" class="form-label">Razón Social:</label>
                    <input type="text" name="razon_social" id="razon_social" class="form-control" value="{{old('razon_social')}}">
                    @error('razon_social')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="direccion" class="form-label">Dirección:</label>
                    <input type="text" name="direccion" id="direccion" class="form-control" value="{{old('direccion')}}">
                    @error('direccion')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="tipo_persona" class="form-label">Tipo:</label>
                    <input type="text" name="tipo_persona" id="tipo_persona" class="form-control" value="{{old('tipo_persona')}}">
                    @error('tipo_persona')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
