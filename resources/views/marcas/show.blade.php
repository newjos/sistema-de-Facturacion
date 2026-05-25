@extends('template')
@section('title','Detalle Marca')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Detalle Marca</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{route('marcas.index')}}">Marcas</a></li>
        <li class="breadcrumb-item active">Detalle Marca</li>
    </ol>
    <div class="container w-100 border border-3 border-primary round p-4 mt3">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Nombre:</label>
                <p class="form-control">{{$marca->nombre}}</p>
            </div>
            <div class="col-12 text-center">
                <a href="{{route('marcas.index')}}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection
