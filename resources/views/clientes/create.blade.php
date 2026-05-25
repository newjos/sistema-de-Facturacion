@extends('template')
@section('title','Crear Cliente')
@push('css')
<style>
    #razon_social{
        resize: none;
    }
</style>
@endpush
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Crear Cliente</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{route('clientes.index')}}">Clientes</a></li>
        <li class="breadcrumb-item active">Crear Cliente</li>
    </ol>
    <div class="container w-100 border border-3 border-primary round p-4 mt3">
        <form action="{{route('clientes.store')}}" method="post">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="razon_social" class="form-label">Razón Social:</label>
                    <input type="text" name="razon_social" id="razon_social" class="form-control" value="{{old('razon_social')}}">
                    @error('razon_social')
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
