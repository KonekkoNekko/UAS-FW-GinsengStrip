<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.nav-middlelogo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    
    
    <p><?php echo e($cartContent); ?></p>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-4">
            <div class="container mb-5 text-center p-1">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo e(Vite::asset('resources/images/cruzde.png')); ?>" alt="image" width="90">
                </a>
            </div>

            <div class="card bg-light">
                <div class="card-body mx-4">
                    <div class="container">
                        <p class="align-self-center p-5 text-center" style="font-size: 30px;">Total Pembayaran</p>
                        <div class="row">
                            <ul class="list-unstyled">
                                <li class="text-black h4">Detail Pengiriman</li>
                                <li class="text-black">Nama Penerima: <?php echo e($deliveryData['receiverName']); ?></li>
                                <li class="text-black">Alamat: <?php echo e($deliveryData['address']); ?></li>
                                <li class="text-black">Jasa Pengiriman: <?php echo e(json_decode($exp)[0]->company); ?></li>

                            </ul>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <p>Nama Kaos</p>
                            </div>
                            <div class="col-xl-2">
                                <p>Kuantitas</p>
                            </div>
                            <div class="col-xl-4 text-end">
                                Total Harga
                            </div>
                            <hr>
                        </div>
                        <?php $__currentLoopData = $cartContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row">
                                <div class="col-xl-6">
                                    <p><?php echo e($item->name); ?></p>
                                </div>
                                <div class="col-xl-2">
                                    <p><?php echo e($item->qty); ?></p>
                                </div>
                                <div class="col-xl-4 text-end">
                                    Rp.
                                    <?php echo e(number_format($item->price, 0, ',', '.')); ?>

                                </div>
                                <hr>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="row">
                            <div class="col-xl-6">
                                <p>Biaya Pengiriman</p>
                            </div>
                            <div class="col-xl-2">
                                <p></p>
                            </div>
                            <div class="col-xl-4 text-end">
                                Rp.
                                <?php echo e(number_format(json_decode($exp)[0]->delivery_fee, 0, ',', '.')); ?>

                            </div>
                            <hr style="border: 2px solid black;">
                        </div>
                        <div class="row text-black">

                            <div class="col-xl-12">
                                <p class="float-end fw-bold">Rp.
                                    <?php echo e(number_format($totalPayment, 0, ',', '.')); ?>

                                </p>
                            </div>
                        </div>
                        <form method="POST" action="<?php echo e(route('payment.storetotal')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="container d-flex justify-content-between">
                                <a href="<?php echo e(route('delivery.show')); ?>"
                                    class="tombol btn btn-sm px-5 mx-3 mb-4 text-white">Back</a>
                                <button type="submit" class="tombol btn btn-sm px-5 mx-3 mb-4 text-white">Next</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/customer/cart/total.blade.php ENDPATH**/ ?>