<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans+JP:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Syncopate:wght@400;700&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <?php echo $__env->make('navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\laragon\www\Framework Pemrograman Web\praktik3-crud\resources\views/app.blade.php ENDPATH**/ ?>