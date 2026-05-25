@extends('template')
@section('title','Detalle Producto')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Detalle Producto</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{route('productos.index')}}">Productos</a></li>
        <li class="breadcrumb-item active">Detalle Producto</li>
    </ol>
    <div class="container w-100 border border-3 border-primary round p-4 mt3">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Nombre:</label>
                <p class="form-control">{{$producto->nombre}}</p>
            </div>
            <div class="col-md-12">
                <label class="form-label">Descripción:</label>
                <p class="form-control">{{$producto->descripcion}}</p>
            </div>
            <div class="col-12 text-center">
                <a href="{{route('productos.index')}}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection
