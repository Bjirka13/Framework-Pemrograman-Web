

<?php $__env->startSection('content'); ?>
    <h1>Welcome to Buku Page</h1>
    <a href="<?php echo e(route('buku.tambah')); ?>">
        <button>Tambah Buku</button>
    </a>
    <table>
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
        </tr>
        <?php $__currentLoopData = $bukus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($buku->judul); ?></td>
            <td><?php echo e($buku->pengarang); ?></td>
            <td><?php echo e($buku->penerbit); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Framework Pemrograman Web\praktik3-crud\resources\views/buku.blade.php ENDPATH**/ ?>