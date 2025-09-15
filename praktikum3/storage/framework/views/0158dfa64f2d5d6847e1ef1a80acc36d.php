

<?php $__env->startSection('content'); ?>
    <h1>Halaman Tambah Buku</h1>
    <form action="<?php echo e(route('buku.simpan')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div>
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" required>
        </div>
        <div>
            <label for="pengarang">Pengarang:</label>
            <input type="text" id="pengarang" name="pengarang">
        </div>
        <div>
            <label for="penerbit">Penerbit:</label>
            <input type="text" id="penerbit" name="penerbit" required>
        </div>
        <button type="submit">Simpan</button>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Framework Pemrograman Web\praktik3-crud\resources\views/tambahbuku.blade.php ENDPATH**/ ?>