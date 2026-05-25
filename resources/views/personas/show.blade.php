@extends('template')
@section('title','Detalle Persona')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Detalle Persona</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{route('personas.index')}}">Personas</a></li>
        <li class="breadcrumb-item active">Detalle Persona</li>
    </ol>
    <div class="container w-100 border border-3 border-primary round p-4 mt3">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Razón Social:</label>
                <p class="form-control">{{$persona->razon_social}}</p>
            </div>
            <div class="col-md-6">
                <label class="form-label">Dirección:</label>
                <p class="form-control">{{$persona->direccion}}</p>
            </div>
            <div class="col-md-6">
                <label class="form-label">Tipo:</label>
                <p class="form-control">{{$persona->tipo_persona}}</p>
            </div>
            <div class="col-12 text-center">
                <a href="{{route('personas.index')}}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection
