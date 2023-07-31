<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.nav-back-logout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card bg-dark position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
        <div class="card-body d-flex flex-column align-items-center">
            <img src="<?php echo e(Vite::asset('resources/images/kepin.png')); ?>" class="card-img-top rounded-circle py-4" alt="..."
                style="width: 100px;">
        </div>
        <div class="card-body bg-secondary">
            <h5 class="text-white fw-bold text-center py-3 ">YOUR PROFILE</h5>
            <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">Kevin Surya</p>
            <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">huditara@gmail.com</p>
            <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">082244582243</p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/customer/profile.blade.php ENDPATH**/ ?>