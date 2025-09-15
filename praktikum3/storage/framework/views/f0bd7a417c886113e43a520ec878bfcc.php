

<?php $__env->startSection('content'); ?>
    <h1>Halaman Tambah Barang</h1>
    <form action="<?php echo e(route('barang.simpan')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div>
            <label for="kode_barang">Kode Barang:</label>
            <input type="text" id="kode_barang" name="kode_barang" required>
        </div>
        <div>
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" id="nama_barang" name="nama_barang">
        </div>
        <div>
            <label for="jumlah">Jumlah:</label>
            <input type="text" id="jumlah" name="jumlah" required>
        </div>
        <button type="submit">Simpan</button>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\praktik3-crud\praktik3-crud\resources\views/tambahbarang.blade.php ENDPATH**/ ?>