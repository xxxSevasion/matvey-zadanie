<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['as' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['as' => false]); ?>
<?php foreach (array_filter((['as' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div>
    <?php if($as === 'button'): ?>
        <button <?php echo e($attributes->merge(['type' => 'submit', 'class' => 'block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out'])); ?>>
            <?php echo e($slot); ?>

        </button>
    <?php elseif($as === 'a'): ?>
        <a <?php echo e($attributes->merge(['class' => 'block px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out'])); ?>>
            <?php echo e($slot); ?>

        </a>
    <?php else: ?>
        <Link <?php echo e($attributes->merge(['class' => 'block px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out'])); ?>>
            <?php echo e($slot); ?>

        </Link>
    <?php endif; ?>
</div><?php /**PATH C:\OSPanel\domains\matvey-zadanie\matvey-zadanie\resources\views/components/dropdown-link.blade.php ENDPATH**/ ?>