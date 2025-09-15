

<?php $__env->startSection('content'); ?>
    <h1>Welcome to Barang Page</h1>
    <a href="<?php echo e(route('barang.tambah')); ?>">
        <button>Tambah Barang</button>
    </a>
    <table>
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Tahun Terbit</th>
        </tr>
        <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($barang->judul); ?></td>
            <td><?php echo e($barang->pengarang); ?></td>
            <td><?php echo e($barang->penerbit); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\praktik3-crud\praktik3-crud\resources\views/barang.blade.php ENDPATH**/ ?>