<?php $__env->startSection('content'); ?>
    <div class="col-lg-10 mx-auto">
        <div class="d-flex" style="width: 40rem;">
            <img src="<?php echo e(Vite::asset('resources/images/mencuri.jpg')); ?>" alt="" class="img-thumbnail m-5">
            <img src="<?php echo e(Vite::asset('resources/images/dicuri.jpg')); ?>" alt="" class="img-thumbnail m-5">
        </div>
        <div class="d-flex" style="width: 40rem;">
            <img src="<?php echo e(Vite::asset('resources/images/big poppa.jpg')); ?>" alt="" class="img-thumbnail m-5">
            <img src="<?php echo e(Vite::asset('resources/images/welcome.jpg')); ?>" alt="" class="img-thumbnail m-5">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/landingpage1.blade.php ENDPATH**/ ?>