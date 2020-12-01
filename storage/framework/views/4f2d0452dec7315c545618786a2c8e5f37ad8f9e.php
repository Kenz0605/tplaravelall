<?php $__env->startSection('title', "Create a new board"); ?>

<?php $__env->startSection('content'); ?>
    <p>Add a board</p>
    <div>
        <form action="/boards" method="POST">
            <?php echo csrf_field(); ?>
            <label for="title">Entrez le titre du board :</label>
            <input type="text" name="title" id="title" required><br><br>
            <label for="textarea">Entrez la description du board</label>
            <input type="text" name="textarea" id="textarea" required><br>

            <button type="submit">Create Board</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1\projetlaravel\resources\views/user/boards/create.blade.php ENDPATH**/ ?>