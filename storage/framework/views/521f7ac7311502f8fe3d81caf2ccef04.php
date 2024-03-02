<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['stores']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['stores']); ?>
<?php foreach (array_filter((['stores']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal67f6dde0ad7e268a63def6c3f50c9e12 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal67f6dde0ad7e268a63def6c3f50c9e12 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\DataStores::resolve(['stores' => $stores] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-data-stores'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\DataStores::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal67f6dde0ad7e268a63def6c3f50c9e12)): ?>
<?php $attributes = $__attributesOriginal67f6dde0ad7e268a63def6c3f50c9e12; ?>
<?php unset($__attributesOriginal67f6dde0ad7e268a63def6c3f50c9e12); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal67f6dde0ad7e268a63def6c3f50c9e12)): ?>
<?php $component = $__componentOriginal67f6dde0ad7e268a63def6c3f50c9e12; ?>
<?php unset($__componentOriginal67f6dde0ad7e268a63def6c3f50c9e12); ?>
<?php endif; ?><?php /**PATH C:\OSPanel\domains\matvey-zadanie\matvey-zadanie\storage\framework\views/5496a7d8f447e9a13527a59a9a2e5ad2.blade.php ENDPATH**/ ?>