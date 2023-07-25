<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Controller & View pada Laravel</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 mx-5">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <a href="<?php echo e(route('home')); ?>" class="btn btn-lg fs-1 my-1">
                            <i class="bi bi-arrow-left-circle"></i>
                        </a>
                    </div>
                    <div class="col-2 d-grid">
                        <a href="<?php echo e(route('cart.show')); ?>" class="btn btn-outline-secondary btn-lg fs-3 my-3 fw-medium">
                            <i class="bi bi-bag-fill me-2"></i>
                            <?php echo e(Cart::instance(auth()->user()->name)->count()); ?>

                        </a>
                    </div>
                </div>
                <h1 class="display-3 text-center mb-5">Product</h1>
                <div class="row">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="img-thumbnail"
                                    src="<?php echo e(Vite::asset('resources/images/' . $product->product_photo_filename)); ?>"
                                    alt="image" class="img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($product->product_album); ?></h5>
                                    <p class="card-text"><?php echo e($product->product_artist); ?></p>
                                    <form action="<?php echo e(route('cart.add', ['id' => $product->id])); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer class="page-footer fixed-bottom bg-secondary mt-5">
        <div class="container text-center p-1">
            <a class="navbar-brand" href="#">
                <img src="<?php echo e(Vite::asset('resources/images/cruzde.png')); ?>" alt="image" width="30"
                    height="30">
            </a>
        </div>
    </footer>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
<?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/customer/product.blade.php ENDPATH**/ ?>