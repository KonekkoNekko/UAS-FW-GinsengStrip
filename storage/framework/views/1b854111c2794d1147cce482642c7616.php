<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.nav-back-logout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card bg-dark position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
        <div class="card-body d-flex flex-column align-items-center">

        </div>
        <div class="card-body bg-secondary">
            <h5 class="text-white fw-bold text-center py-3 ">YOUR PROFILE</h5>
            <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded"><?php echo e($userdata->name); ?></p>
            <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded"><?php echo e($userdata->username); ?></p>
            <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded"><?php echo e($userdata->email); ?></p>
            <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded"><?php echo e($userdata->phone); ?></p>
            <div class="d-flex justify-content-center">
                <form method="POST" action="<?php echo e(route('delete-account')); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger mt-3 border"
                        onclick="return confirm('Are you sure you want to delete your account? This action cannot be undone.')">
                        Delete Account
                    </button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/customer/profile.blade.php ENDPATH**/ ?>