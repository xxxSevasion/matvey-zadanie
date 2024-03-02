<SpladeRehydrate :name='<?php echo json_encode($name, 15, 512) ?>' <?php echo e($attributes->mergeVueBinding(':on', json_encode($on))->mergeVueBinding(':passthrough', $passthroughValue())); ?>>
    <?php echo e($slot ?? ""); ?>

</SpladeRehydrate><?php /**PATH C:\OSPanel\domains\matvey-zadanie\matvey-zadanie\vendor\protonemedia\laravel-splade\src/../resources/views/functional/rehydrate.blade.php ENDPATH**/ ?>