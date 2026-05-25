<?php $__env->startSection('title','Compras'); ?>
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
    <h1 class="mt-4 text-center">Compras</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?php echo e(route('panel')); ?>">Inicio</a></li>
        <li class="breadcrumb-item active">Compras</li>
    </ol>
    <div class="mb-4">
        <a href="<?php echo e(route('compras.create')); ?>">
            <button type="button" class="btn btn-primary">Añadir Nuevo Registro </button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Proveedor</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $compras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($compra->id); ?></td>
                        <td><?php echo e($compra->proveedore->persona->razon_social ?? ''); ?></td>
                        <td><?php echo e($compra->created_at->format('d/m/Y')); ?></td>
                        <td>
                            <a href="<?php echo e(route('compras.edit', $compra->id)); ?>" class="btn btn-warning btn-sm">Editar</a>
                            <form action="<?php echo e(route('compras.destroy', $compra->id)); ?>" method="POST" style="display:inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\NewJos\Documents\Proyectos en Laravel\SistemaNewjos\resources\views/compras/index.blade.php ENDPATH**/ ?>