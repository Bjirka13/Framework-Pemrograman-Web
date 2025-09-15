

<?php $__env->startSection('content'); ?>
    <h1>Company Profile</h1>
    <p>Ini adalah halaman Company Profile.</p>
	<video width="640" height="360" controls>
    <source src="<?php echo e(asset($video)); ?>" type="video/mp4">
	</video>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\praktikum3\resources\views/company_profile.blade.php ENDPATH**/ ?>