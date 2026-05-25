
<?php $__env->startSection('title','Crear Categorias'); ?>
<?php $__env->startPush('css'); ?>
<style>
    #descripcion{
        resize: none;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid px-4">
                        <h1 class="mt-4 text-center">Crear Categoria</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('panel')); ?>">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo e(route('categorias.index')); ?>">Categorias</a></li>
                            <li class="breadcrumb-item" active>Crear Categoria</li>
                        </ol>
                        <div class="container w-100 border border-3 border-primary round p-4 mt3">                            
                            <form action="<?php echo e(route('categorias.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="nombre" class="form-label">Nombre:</label>
                                        <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo e(old('nombre')); ?>">
                                        <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small class="text-danger"><?php echo e($message); ?></small>                                                                                    
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="descripion" class="form-label">Descripion</label>
                                        <textarea name="descripcion" id="descripcion" rows="3" class="form-control"><?php echo e(old('descripcion')); ?></textarea>
                                        <?php $__errorArgs = ['descripcion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small class="text-danger"><?php echo e($message); ?></small>                                                                                    
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
</div>
          
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\NewJos\Documents\Proyectos en Laravel\SistemaNewjos\resources\views/categorias/create.blade.php ENDPATH**/ ?>