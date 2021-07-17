<?php $__env->startSection('content'); ?>
<div class="container">

    <h3>Update Data</h3>
    <hr>
    <form method="POST" action="<?php echo e(url('/play/'.$data3->id)); ?>">
        <input type="hidden" name="_method" value="PATCH">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Artist ID</label>
            <select name="artist_id" class="form-control col-3">
                <option selected value="<?php echo e($data3->artist_id); ?>"><?php echo e($data3->artist_id); ?></option>
                <option>----------------------------</option>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($x->artist_id); ?>"><?php echo e($x->artist_id." - ".$x->artist_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Album ID</label>
            <select name="album_id" class="form-control col-3">
                <option selected value="<?php echo e($data3->album_id); ?>"><?php echo e($data3->album_id); ?></option>
                <option>----------------------------</option>
                <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($z->album_id); ?>"><?php echo e($z->album_id." - ".$z->album_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Track ID</label>
            <select name="track_id" class="form-control col-3">
                <option selected value="<?php echo e($data3->track_id); ?>"><?php echo e($data3->track_id); ?></option>
                <option>----------------------------</option>
                <?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $y): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($y->track_id); ?>"><?php echo e($y->track_id." - ".$y->track_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Played</label>
            <input type="text" class="form-control col-3" name="played" value="<?php echo e($data3->played); ?>">
        </div>
        <button type="submit" class="btn btn-outline-warning">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/smith/Smith/College/Sem VI/PBWL/quiz1-music/resources/views/played/edit.blade.php ENDPATH**/ ?>