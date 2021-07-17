<?php $__env->startSection('content'); ?>
<div class="container">

    <h3>Update Data</h3>
    <hr>
    <form method="POST" action="<?php echo e(url('/artis/'.$data->id)); ?>">
        <input type="hidden" name="_method" value="PATCH">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>ID</label>
            <input type="text" class="form-control col-1" name="id" value="<?php echo e($data->artist_id); ?>">
        </div>
        <div class="form-group">
            <label>Artist Name</label>
            <input type="text" class="form-control col-4" name="nama" value="<?php echo e($data->artist_name); ?>">
        </div>
        <button type="submit" class="btn btn-outline-warning">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/smith/Smith/College/Sem VI/PBWL/quiz1-music/resources/views/artist/edit.blade.php ENDPATH**/ ?>