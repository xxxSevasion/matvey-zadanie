<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal5b19a9f8a5047f5cecb7555988b1287c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b19a9f8a5047f5cecb7555988b1287c = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Slot::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-slot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Slot::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5b19a9f8a5047f5cecb7555988b1287c)): ?>
<?php $attributes = $__attributesOriginal5b19a9f8a5047f5cecb7555988b1287c; ?>
<?php unset($__attributesOriginal5b19a9f8a5047f5cecb7555988b1287c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b19a9f8a5047f5cecb7555988b1287c)): ?>
<?php $component = $__componentOriginal5b19a9f8a5047f5cecb7555988b1287c; ?>
<?php unset($__componentOriginal5b19a9f8a5047f5cecb7555988b1287c); ?>
<?php endif; ?><?php /**PATH C:\OSPanel\domains\matvey-zadanie\matvey-zadanie\storage\framework\views/c486a6f3988363a32430b0656b6ab437.blade.php ENDPATH**/ ?>