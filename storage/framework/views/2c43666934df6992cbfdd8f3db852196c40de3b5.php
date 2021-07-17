<?php $__env->startSection('content'); ?>
<div class="container">
    <h3>Tambah Data</h3>
    <hr>
    <form method="POST" action="<?php echo e(url('/artis')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>ID</label>
            <input type="text" class="form-control col-1" name="id">
        </div>
        <div class="form-group">
            <label>Artist Name</label>
            <input type="text" class="form-control col-4" name="nama">
        </div>
        <button type="submit" class="btn btn-outline-success">Simpan</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/smith/Smith/College/Sem VI/PBWL/quiz1-music/resources/views/artist/add.blade.php ENDPATH**/ ?>