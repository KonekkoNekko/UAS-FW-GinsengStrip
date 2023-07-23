<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(auth()->user()->is_admin == 1): ?>
                    <a href="<?php echo e(url('admin/routes')); ?>">Admin</a>
                    <?php else: ?>
                    <div class=”panel-heading”>Customer User</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gfiqr\OneDrive\Documents\Framework\UAS\UAS-FW-GinsengStrip\resources\views/home.blade.php ENDPATH**/ ?>