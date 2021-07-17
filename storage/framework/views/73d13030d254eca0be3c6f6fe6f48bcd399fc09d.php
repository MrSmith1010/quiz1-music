<?php $__env->startSection('content'); ?>
<div class="container">
    <h3>Add Data</h3>
    <hr>
    <form method="POST" action="<?php echo e(url('/track')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Track ID</label>
            <input type="text" class="form-control col-2" name="track_id">
        </div>
        <div class="form-group">
            <label>Track Name</label>
            <input type="text" class="form-control col-4" name="track_name">
        </div>
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
            <select name="album_id" class="form-control col-3">
                <option selected>Choose Album ID</option>
                <option>----------------------------</option>
                <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($z->album_id); ?>"><?php echo e($z->album_id." - ".$z->album_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Time</label>
            <input type="text" class="form-control col-1" name="time" placeholder="02:30">
        </div>
        <button type="submit" class="btn btn-outline-success">Save</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/smith/Smith/College/Sem VI/PBWL/quiz1-music/resources/views/track/add.blade.php ENDPATH**/ ?>