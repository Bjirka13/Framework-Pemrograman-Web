

<?php $__env->startSection('title'); ?>
    Halaman Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Ini Halaman Home</h1>
    <p><?php echo e($data); ?></p>
    <p><?php echo e($number); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Framework Pemrograman Web\praktik3-crud\resources\views/home.blade.php ENDPATH**/ ?>