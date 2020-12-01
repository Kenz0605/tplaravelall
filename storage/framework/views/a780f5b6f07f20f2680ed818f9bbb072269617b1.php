<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <form method="POST" action="<?php echo e(url('tasks/create')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>Ttre de la tâche</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>Description de la tâche</label>
                <textarea rows="4" class="form-control" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('masterTask', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1\projetlaravel\resources\views/createTask.blade.php ENDPATH**/ ?>