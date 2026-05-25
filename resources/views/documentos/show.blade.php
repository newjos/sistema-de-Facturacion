@extends('template')
@section('title','Detalle Documento')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Detalle Documento</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{route('documentos.index')}}">Documentos</a></li>
        <li class="breadcrumb-item active">Detalle Documento</li>
    </ol>
    <div class="container w-100 border border-3 border-primary round p-4 mt3">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Tipo:</label>
                <p class="form-control">{{$documento->tipo_documento}}</p>
            </div>
            <div class="col-md-6">
                <label class="form-label">Número:</label>
                <p class="form-control">{{$documento->numero_documento}}</p>
            </div>
            <div class="col-12 text-center">
                <a href="{{route('documentos.index')}}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection
