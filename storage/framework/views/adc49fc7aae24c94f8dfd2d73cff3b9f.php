<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.nav-middlelogo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
        use App\Models\Payment;
        $paymentBank = Payment::all();
    ?>
    <h2 class="text-center mt-5">Pick Your Payment</h2>
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 my-2">
                    <form>
                        <legend>Bank Transfer</legend>
                        <div class="mb-3 mt-3">
                            <label for="payment" class="form-label">Bank Destination</label>
                            <select name="payment" id="payment" class="form-select">
                                <?php $__currentLoopData = $paymentBank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($bank->id); ?>" <?php echo e(old('bank') == $bank->id ? 'selected' : ''); ?>>
                                        <?php echo e($bank->code . ' - ' . $bank->bank . ' - ' . $bank->bank); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            
                        </div>
                        <div class="mb-3">
                            <label for="bankorigin" class="form-label">Bank Origin</label>
                            <input type="text" id="bankorigin" class="form-control" placeholder="Enter Your Bank Origin">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Bank Account's number</label>
                            <input type="text" id="disabledTextInput" class="form-control"
                                placeholder="Enter Your Bank Account's number">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 align-self-center">
                    <h3 class="text-center">QRIS</h3>
                    <img src="<?php echo e(Vite::asset('resources/images/qris.png')); ?>" alt="" class="d-block mx-auto">
                </div>
                <div class="col-md-12 my-3">
                    <label for="payfile" class="form-label text-center">Send the Proof of Payment</label>
                    <input type="file" class="form-control" name="payfile" id="payfile">
                </div>

            </div>
            <form method="POST" action="<?php echo e(route('finalstore')); ?>">
                <?php echo csrf_field(); ?>
                <div class="row justify-content-center mt-1">
                    <button class="btn btn-primary col-3 mx-1" type="button">Back</button>
                    <button class="btn btn-primary col-3" type="button">Next</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/customer/cart/payment.blade.php ENDPATH**/ ?>