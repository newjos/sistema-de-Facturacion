<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Sistema de Facturacion Newjos" />
        <meta name="author" content="Numan Febres, NEWJOS" />
        <title>Sistema de Facturacion NEWJOS - <?php echo $__env->yieldContent('title'); ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <link href="<?php echo e(asset('css/Template.css')); ?>" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <?php echo $__env->yieldPushContent('css'); ?>
    </head>
    <body class="sb-nav-fixed">
    <?php if (isset($component)) { $__componentOriginalef9c1f2dc7912674f7826089c0a953dc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef9c1f2dc7912674f7826089c0a953dc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navigation-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef9c1f2dc7912674f7826089c0a953dc)): ?>
<?php $attributes = $__attributesOriginalef9c1f2dc7912674f7826089c0a953dc; ?>
<?php unset($__attributesOriginalef9c1f2dc7912674f7826089c0a953dc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef9c1f2dc7912674f7826089c0a953dc)): ?>
<?php $component = $__componentOriginalef9c1f2dc7912674f7826089c0a953dc; ?>
<?php unset($__componentOriginalef9c1f2dc7912674f7826089c0a953dc); ?>
<?php endif; ?>  
    <?php if (isset($component)) { $__componentOriginal8f4b0c7aa39bbb03a7f48d2d78460146 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8f4b0c7aa39bbb03a7f48d2d78460146 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation-menu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navigation-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8f4b0c7aa39bbb03a7f48d2d78460146)): ?>
<?php $attributes = $__attributesOriginal8f4b0c7aa39bbb03a7f48d2d78460146; ?>
<?php unset($__attributesOriginal8f4b0c7aa39bbb03a7f48d2d78460146); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8f4b0c7aa39bbb03a7f48d2d78460146)): ?>
<?php $component = $__componentOriginal8f4b0c7aa39bbb03a7f48d2d78460146; ?>
<?php unset($__componentOriginal8f4b0c7aa39bbb03a7f48d2d78460146); ?>
<?php endif; ?> 
        
            <div id="layoutSidenav_content">
                <main>
                    <?php echo $__env->yieldContent('content'); ?>
                </main>
                <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?> 
            </div>
        </div>
        <?php echo $__env->yieldPushContent('js'); ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('js/scripts.js')); ?>"></script>
        
        
    </body>
</html>
<?php /**PATH C:\Users\NewJos\Documents\Proyectos en Laravel\SistemaNewjos\resources\views/Template.blade.php ENDPATH**/ ?>