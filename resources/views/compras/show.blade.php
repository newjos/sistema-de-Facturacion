@extends('template')
@section('title','Detalle Compra')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Detalle Compra</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{route('compras.index')}}">Compras</a></li>
        <li class="breadcrumb-item active">Detalle Compra</li>
    </ol>
    <div class="container w-100 border border-3 border-primary round p-4 mt3">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Proveedor:</label>
                <p class="form-control">{{$compra->proveedore->persona->razon_social ?? ''}}</p>
            </div>
            <div class="col-md-12">
                <label class="form-label">Descripción:</label>
                <p class="form-control">{{$compra->descripcion}}</p>
            </div>
            <div class="col-12 text-center">
                <a href="{{route('compras.index')}}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection
