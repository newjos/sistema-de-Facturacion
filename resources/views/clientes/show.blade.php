@extends('template')
@section('title','Detalle Cliente')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Detalle Cliente</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{route('clientes.index')}}">Clientes</a></li>
        <li class="breadcrumb-item active">Detalle Cliente</li>
    </ol>
    <div class="container w-100 border border-3 border-primary round p-4 mt3">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Razón Social:</label>
                <p class="form-control">{{$cliente->persona->razon_social ?? ''}}</p>
            </div>
            <div class="col-12 text-center">
                <a href="{{route('clientes.index')}}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection
