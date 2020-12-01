<?php $__env->startSection('content'); ?>
    <h1 class="text-3xl text-green-500 mb-6 text-center">Completez vos informations</h1>
    <form method="POST" action="<?php echo e(route('register')); ?>" class="w-full max-w-sm mx-auto rounded-lg border shadow-md p-5 mb-5">
        <?php echo csrf_field(); ?>
        <div class="mb-4">
            <label for="name" class="block font-semibold text-gray-700 mb-2">Nom d'utilisateur</label>
            <input id="name" type="text" name="name" class="shadow border rounded w-full p-2" value="<?php echo e(old('name')); ?>" autocomplete="name" placeholder="Nom d'utilisateur" autofocus>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-red-400 text-sm"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-4">
            <label for="email" class="block font-semibold text-gray-700 mb-2">Email</label>
            <input id="email" type="email" name="email" class="shadow border rounded w-full p-2" value="<?php echo e(old('email')); ?>" autocomplete="email" placeholder="Votre email" autofocus>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-red-400 text-sm"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-4">
            <label for="password" class="block font-semibold text-gray-700 mb-2">Mot de passe</label>
            <input id="password" type="password" name="password" class="shadow border rounded w-full p-2" value="<?php echo e(old('password')); ?>" autocomplete="password" placeholder="Votre mot de passe" autofocus>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-red-400 text-sm"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block font-semibold text-gray-700 mb-2">Confirmation du mot de passe</label>
            <input id="password_confirmation" type="password" name="password_confirmation" class="shadow border rounded w-full p-2" value="<?php echo e(old('password_confirmation')); ?>" autocomplete="password_confirmation" placeholder="Retapez votre mot de passe" autofocus>
        </div>

        <button type="submit" class="bg-green-500 text-white hover:bg-green-700 transition ease-in-out duration-500 rounded-md shadow-md w-full block px-4 py-2 mt-3">Créer mon compte</button>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1\projetlaravel\resources\views/auth/register.blade.php ENDPATH**/ ?>