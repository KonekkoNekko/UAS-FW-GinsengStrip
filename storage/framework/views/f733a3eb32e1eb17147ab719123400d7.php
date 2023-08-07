<?php $__env->startSection('content'); ?>
    <div class="card rounded-4">
        <div class="row g-0 ">
            <div class="col-md-6">
                <div id="map" style="height:800px;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body" style="max-height: 800px; overflow-y: auto;">
                    <div class="p-5">
                        <h1 class="display-5">Data Transaksi</h1>
                        <dl class="row mt-3">
                            <hr>
                            <dt class="col-md-3 ">Customer Name</dt>
                            <dd class="col-md-9 "><?php echo e($transaction->cust_name); ?></dd>
                            <hr>
                            <dt class="col-md-3 ">Cart Items</dt>
                            <dd class="col-md-9 ">
                                <?php $__currentLoopData = $transaction->cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($item['name']); ?> - <?php echo e($item['options']['artist']); ?> : <?php echo e($item['qty']); ?> pcs -
                                    Rp. <?php echo e(number_format($item['price'], 0, ',', '.')); ?>

                                    <br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </dd>
                            <hr>
                            <dt class="col-md-3 ">Total Transaction</dt>
                            <dd class="col-md-9 ">Rp. <?php echo e(number_format($transaction->total_transaction, 0, ',', '.')); ?></dd>
                            <hr>
                            <dt class="col-md-3 ">Payment Method</dt>
                            <dd class="col-md-9 "><?php echo e($transaction->payment_method); ?></dd>
                            <hr>
                            <dt class="col-md-3 ">Payment Bank</dt>
                            <dd class="col-md-9 "><?php echo e($transaction->payment->code); ?> - <?php echo e($transaction->payment->bank); ?> -
                                <?php echo e($transaction->payment->account_num); ?></dd>
                            <hr>
                            <dt class="col-md-3">Address</dt>
                            <dd class="col-md-9"><?php echo e($transaction->address); ?></dd>
                            <hr>
                            <dt class="col-md-3">Expedition Company</dt>
                            <dd class="col-md-9"><?php echo e($transaction->expedition->company); ?></dd>
                            <hr>
                            <dt class="col-md-3">Transaction Status</dt>
                            <dd class="col-md-9">
                                <form action="<?php echo e(route('transc.update', ['id' => $transaction->id])); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    
                                    <select name="statustransc" id="statustransc" class="form-select"
                                        onchange="this.form.submit()">
                                        <?php
                                            $selected = '';
                                            if ($errors->any()) {
                                                $selected = old('statustransc');
                                            } else {
                                                $selected = $transaction->pay_statuses_id;
                                            }
                                        ?>
                                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($status->id); ?>"
                                                <?php echo e($selected == $status->id ? 'selected' : ''); ?>>
                                                <?php echo e($status->status); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </form>
                            </dd>
                            <hr>
                            <dt class="col-md-3">Payment Proof</dt>
                            <dd class="col-md-9">
                                <img src="<?php echo e(asset('/storage/payproof/' . $transaction->encrypted_filename)); ?>"
                                    alt=":(" class="img-fluid">

                                <?php echo e($transaction->encrypted_filename); ?>

                            </dd>
                            <hr>
                        </dl>
                        <div class="row">
                            <div class="col-md-4 d-grid">
                                <a href="<?php echo e(route('transc.index')); ?>" class="btn btn-outline-dark btn-lg mt-3">
                                    <i class="bi-arrow-left-circle me-2"></i> Kembali
                                </a>
                            </div>
                            <div class="col-md-4 d-grid">
                                <a href="<?php echo e(route('openGoogleMaps', ['coordinate' => $transaction->coordinate])); ?>"
                                    class="btn btn-outline-primary btn-lg mt-3">
                                    <i class="bi bi-geo-fill"></i> Google Map
                                </a>
                            </div>
                            <div class="col-md-4 d-grid">
                                <form method="POST" action="<?php echo e(route('transc.delete', ['id' => $transaction->id])); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-outline-danger btn-lg mt-3 w-100">
                                        <i class="bi bi-trash-fill me-2"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-grid">

                            </div>
                            <div class="col-md-6 d-grid"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var coord = "<?php echo e($transaction->coordinate); ?>";
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script type="module">
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/leafletshow.js'); ?>
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gfiqr\OneDrive\Documents\Framework\UAS\UAS-FW-GinsengStrip\resources\views/admin/transaction/edit.blade.php ENDPATH**/ ?>