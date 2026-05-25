@extends('template')
@section('title','Editar Documento')
@push('css')
<style>
    #tipo_documento{
        resize: none;
    }
</style>
@endpush
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Editar Documento</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{route('documentos.index')}}">Documentos</a></li>
        <li class="breadcrumb-item active">Editar Documento</li>
    </ol>
    <div class="container w-100 border border-3 border-primary round p-4 mt3">
        <form action="{{route('documentos.update', $documento->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="tipo_documento" class="form-label">Tipo:</label>
                    <input type="text" name="tipo_documento" id="tipo_documento" class="form-control" value="{{$documento->tipo_documento}}">
                    @error('tipo_documento')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="numero_documento" class="form-label">Número:</label>
                    <input type="text" name="numero_documento" id="numero_documento" class="form-control" value="{{$documento->numero_documento}}">
                    @error('numero_documento')
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
