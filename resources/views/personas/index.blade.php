@extends('template')
@section('title','Personas')
@push('css')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">
@endpush
@section('content')
@if (session('success'))
<script>
    const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 2000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});
Toast.fire({
  icon: "success",
  title: "Operacion Exitosa"
});
</script>
@endif
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Personas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item active">Personas</li>
    </ol>
    <div class="mb-4">
        <a href="{{route('personas.create')}}">
            <button type="button" class="btn btn-primary">Añadir Nuevo Registro </button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Razón Social</th>
                        <th>Dirección</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personas as $persona)
                    <tr>
                        <td>{{ $persona->id }}</td>
                        <td>{{ $persona->razon_social }}</td>
                        <td>{{ $persona->direccion }}</td>
                        <td>{{ $persona->tipo_persona }}</td>
                        <td>
                            <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
