<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="table-responsive border p-3 rounded-4 mb-5 bg-light">
                <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="transTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Cart</th>
                            <th>Total Transaction</th>
                            <th>Payment Method</th>
                            <th>Bank Destination</th>
                            <th>Address</th>
                            <th>Expedition</th>
                            <th>Status</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($transaction->id); ?></td>
                                <td><?php echo e($transaction->cust_name); ?></td>
                                <td>
                                    <?php $__currentLoopData = $transaction->cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($item['name']); ?> - <?php echo e($item['options']['artist']); ?> : <?php echo e($item['qty']); ?> pcs -
                                        <?php echo e($item['price']); ?>

                                        <br>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>Rp. <?php echo e(number_format($transaction->total_transaction, 0, ',', '.')); ?></td>
                                <td><?php echo e($transaction->payment_method); ?></td>
                                <td><?php echo e($transaction->payment->bank); ?></td>
                                <td><?php echo e($transaction->address); ?></td>
                                <td><?php echo e($transaction->expedition->company); ?></td>
                                <td><?php echo e($transaction->payStatus->status); ?></td>
                                <td><?php echo $__env->make('admin.transaction.action', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script type="module">
        $(document).ready(function() {
            $('#transTable').DataTable();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gfiqr\OneDrive\Documents\Framework\UAS\UAS-FW-GinsengStrip\resources\views/admin/transaction/index.blade.php ENDPATH**/ ?>