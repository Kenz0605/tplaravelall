<?php $__env->startSection('title', "User's boards"); ?>

<?php $__env->startSection('content'); ?>
    <p>Il faut parcourir toutes les boards</p>
    <?php $__currentLoopData = $boards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $board): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p>This is your board <?php echo e($board->title); ?></p>
        <p><?php echo e($board->description); ?></p>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1\projetlaravel\resources\views/user/boards/index.blade.php ENDPATH**/ ?>