<?php $__env->startSection('content'); ?>
<div class="container">
    <h3>Add Data</h3>
    <hr>
    <form method="POST" action="<?php echo e(url('/album')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Artist ID</label>
            <select name="artist_id" class="form-control col-3">
                <option selected>Choose Artist ID</option>
                <option>----------------------------</option>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($x->artist_id); ?>"><?php echo e($x->artist_id." - ".$x->artist_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Album ID</label>
            <input type="text" class="form-control col-2" name="album_id">
        </div>
        <div class="form-group">
            <label>Album Name</label>
            <input type="text" class="form-control col-4" name="album_name">
        </div>
        <button type="submit" class="btn btn-outline-success">Save</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/smith/Smith/College/Sem VI/PBWL/quiz1-music/resources/views/album/add.blade.php ENDPATH**/ ?>