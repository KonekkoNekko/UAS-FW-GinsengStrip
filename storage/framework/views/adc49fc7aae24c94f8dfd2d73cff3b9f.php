<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.nav-middlelogo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h2 class="text-center mt-5">Pick Your Payment</h2>
    <div class="d-flex">
        <div class="m-5 col-6 ms-5">
            <form>
                <fieldset disabled>
                    <legend>Bank Transfer</legend>
                    <div class="mb-3 mt-3">
                        <label for="disabledSelect" class="form-label">Bank Destination</label>
                        <select id="disabledSelect" class="form-select">
                            <option>BCA</option>
                            <option>Mandiri</option>
                            <option>BRI</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Bank Origin</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Bank Account's name</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="m-5">
            <h3 class="text-center">QRIS</h3>
            <img src="<?php echo e(Vite::asset('resources/images/qris.png')); ?>" alt="" class="d-flex justify-content-center">
        </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="button"><i class="bi bi-arrow-bar-up mx-2"></i>Send proof of payment</button>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-center mt-2 mb-5">
        <button class="btn btn-primary me-md-2 col-3" type="button">Back</button>
        <button class="btn btn-primary col-3" type="button">Next</button>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/customer/cart/payment.blade.php ENDPATH**/ ?>