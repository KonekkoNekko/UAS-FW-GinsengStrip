<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.nav-middlelogo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container d-flex mx-auto my-auto align-items-center align-content-center justify-content-center">
        <div class="col-md-6">
            <div id="map" style="height:800px;">

            </div>
        </div>
        <div class="col-md-6">
            <div class="p-5">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Your Delivery</h4>
                </div>
                <hr>
                <form method="POST" action="<?php echo e(route('delivery.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row text-start">
                        <div class="col-md-12 mb-3">
                            <label for="receiverName" class="form-label">Receiver's Name</label>
                            <input class="form-control <?php $__errorArgs = ['receiverName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                name="receiverName" id="receiverName"
                                value="<?php echo e(old('receiverName', $deliveryData['receiverName'] ?? '')); ?>"placeholder="Enter Receiver's Name">
                            <?php $__errorArgs = ['receiverName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><small><?php echo e($message); ?></small></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="address"
                                id="address" value="<?php echo e(old('address', $deliveryData['address'] ?? '')); ?>" placeholder="Enter Address">
                            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><small><?php echo e($message); ?></small></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="coordinate" class="form-label">Coordinate</label>
                            <input class="form-control <?php $__errorArgs = ['coordinate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                name="coordinate" id="coordinate" value="<?php echo e(old('coordinate', $deliveryData['coordinate'] ?? '')); ?>"
                                placeholder="Added automatically on map's marker" readonly>
                            <?php $__errorArgs = ['coordinate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><small><?php echo e($message); ?></small></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="address" class="form-label">Select Delivery</label>
                            <select name="expedition" id="expedition" class="form-select">
                                <?php $__currentLoopData = $expeditions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expedition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($expedition->id); ?>" <?php echo e(old('expedition', $deliveryData['expedition'] ?? '') == $expedition->id ? 'selected' : ''); ?>>
                                        <?php echo e($expedition->company); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <form method="POST" action="<?php echo e(route('delivery.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="<?php echo e(route('cart.show')); ?>" class="btn btn-outline-dark btn-lg mt-3"><i
                                        class="bi-arrow-left-circle me-2"></i> Back</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                    Next</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptstuff'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/leafletdeliver.js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/customer/cart/delivery.blade.php ENDPATH**/ ?>