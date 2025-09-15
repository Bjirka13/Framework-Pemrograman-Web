

<?php $__env->startSection('title'); ?>
    Halaman Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Selamat Datang di Sistem Inventaris</h1>
    <p><?php echo e($data); ?></p>
    <p><?php echo e($number); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\praktik3-crud\praktik3-crud\resources\views/home.blade.php ENDPATH**/ ?>