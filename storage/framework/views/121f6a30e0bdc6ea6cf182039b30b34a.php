
<?php $__env->startSection('title','Categorias'); ?>
<?php $__env->startPush('css'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">

<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
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
<?php endif; ?>
<div class="container-fluid px-4">
                        <h1 class="mt-4 text-center">Categorias</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('panel')); ?>">Inicio</a></li>
                            <li class="breadcrumb-item active">Categorias</li>
                        </ol>

<div class="mb-4">                  
<a href="<?php echo e(route('categorias.create')); ?>">
    <button type="button" class="btn btn-primary">Añadir Nuevo Registro </button>
</a>
</div> 
            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabla Categorias
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Acciones</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <tr>
                                            <td>
                                                <?php echo e($categoria->caracteristica->nombre); ?>

                                            </td>
                                         </tr>
                                             
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                    </tbody>
                                </table>
                            </div>
            </div> 
</div>                            
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
<script src="<?php echo e(asset('js/datatables-simple-demo.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\NewJos\Documents\Proyectos en Laravel\SistemaNewjos\resources\views/categorias/index.blade.php ENDPATH**/ ?>