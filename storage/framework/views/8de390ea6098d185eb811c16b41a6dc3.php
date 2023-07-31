<?php $__env->startSection('content'); ?>
    <div class="container text-center p-1 position-absolute top-50 start-50 translate-middle">
        <p class="mt-5">WELCOME TO</p>
        <div>
            <img src="<?php echo e(Vite::asset('resources/images/ginsengblack.png')); ?>" alt="image" width="170">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptstuff'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Delay before fading out and redirecting to 'landingpage1'
            setTimeout(function() {
                $('body').fadeOut(500, function() {
                    // After the fade out is complete, redirect to 'landingpage1'
                    window.location.href = '/landingpage1';
                });
            }, 1500); // 1500 milliseconds = 1.5 seconds
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/landingpage0.blade.php ENDPATH**/ ?>