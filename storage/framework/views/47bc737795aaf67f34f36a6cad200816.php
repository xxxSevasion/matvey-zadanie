<SpladeDataStores
    :remember="<?php echo \Illuminate\Support\Js::from($remember)->toHtml() ?>"
    :local-storage="<?php echo \Illuminate\Support\Js::from($localStorage)->toHtml() ?>"
    :parsed="<?php echo \Illuminate\Support\Js::from($parsed)->toHtml() ?>"
    :raw="{
        <?php $__currentLoopData = $raw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store => $rawJson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo \Illuminate\Support\Js::from($store)->toHtml() ?>: <?php echo $rawJson; ?><?php if(!$loop->last): ?>,<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    }"
>
    <template #default="{ <?php echo $scopes; ?> }">
        <?php echo e($slot); ?>

    </template>
</SpladeDataStores><?php /**PATH C:\OSPanel\domains\matvey-zadanie\matvey-zadanie\vendor\protonemedia\laravel-splade\src/../resources/views/functional/dataStores.blade.php ENDPATH**/ ?>