<?php $__env->startSection('content'); ?>
<div class="container">
    <h3>Album</h3>
    <hr>
    <a href="<?php echo e(url('album/create')); ?>" class="btn btn-success mb-3">Add</a>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Artist ID</th>
                <th>Album ID</th>
                <th>Album Name</th>
                <th class="text-center">Opsi</th>
            </tr>
        </thead>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($x->artist_id); ?></td>
            <td><?php echo e($x->album_id); ?></td>
            <td><?php echo e($x->album_name); ?></td>
            <td class="text-center">
                <form action="<?php echo e(url('album/'.$x->id)); ?>" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <?php echo csrf_field(); ?>
                    <a href="<?php echo e(url('album/'.$x->id.'/edit')); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/smith/Smith/College/Sem VI/PBWL/quiz1-music/resources/views/album/index.blade.php ENDPATH**/ ?>