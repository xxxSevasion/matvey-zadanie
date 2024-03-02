<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <link href="<?php echo e(asset('/assets/css/main.css')); ?>" rel="stylesheet">

    <!--

    Tooplate 2132 Clean Work

    https://www.tooplate.com/view/2132-clean-work

    Free Bootstrap 5 HTML Template

    -->
</head>

<body>

<?php echo $__env->make('client.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>
<?php echo $__env->make('client.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- JAVASCRIPT FILES -->
<script src="<?php echo e(asset('/assets/js/uptugo.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/burgewrMenu.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\OSPanel\domains\matvey-zadanie\matvey-zadanie\resources\views/client/layout/layout.blade.php ENDPATH**/ ?>