@extends('template')
@section('title','Presentaciones')
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
    <h1 class="mt-4 text-center">Presentaciones</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item active">Presentaciones</li>
    </ol>
    <div class="mb-4">
        <a href="{{route('presentaciones.create')}}">
            <button type="button" class="btn btn-primary">Añadir Nuevo Registro </button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($presentaciones as $presentacione)
                    <tr>
                        <td>{{ $presentacione->id }}</td>
                        <td>{{ $presentacione->nombre ?? '' }}</td>
                        <td>
                            <a href="{{ route('presentaciones.edit', $presentacione->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('presentaciones.destroy', $presentacione->id) }}" method="POST" style="display:inline-block;">
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
