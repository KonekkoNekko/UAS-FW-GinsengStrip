<?php $__env->startSection('content'); ?>
    <div class="card rounded-4">
        <div class="row g-0">
                <div class="p-5">
                    <div class="d-flex mb-3 text-start">
                        <i class="bi-person-circle fs-2"></i>
                        <h1 class="ms-3">Detail Product</h1>
                    </div>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="productAlbum" class="form-label fs-4">Product Album</label>
                                    <h3><?php echo e($product->product_album); ?></h3>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="productArtist" class="form-label fs-4">Product Artist</label>
                                    <h3><?php echo e($product->product_artist); ?></h3>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="productPrice" class="form-label fs-4">Product Price</label>
                                    <h3>Rp. <?php echo e(number_format($product->product_price, 0, ',', '.')); ?></h3>
                                    <?php $__errorArgs = ['productPrice'];
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
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12 mb-3">
                                <div class="row te">
                                    <label for="productphoto" class="form-label fs-1">Product Photo</label>
                                    <img src="<?php echo e(asset('/storage/products/' . $product->original_filename)); ?>"
                                        alt=":(" class="img-thumbnail w-50 h-50 ms-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4 d-grid">
                            <a href="<?php echo e(route('productadms.index')); ?>" class="btn btn-outline-dark btn-lg mt-3">
                                <i class="bi-arrow-left-circle me-2"></i> Kembali
                            </a>
                        </div>
                        <div class="col-md-4 d-grid">
                            <a href="<?php echo e(route('productadms.edit', $product->id)); ?>" class="btn btn-outline-secondary btn-lg mt-3">
                                <i class="bi bi-pencil-square me-2"></i> Sunting
                            </a>
                        </div>
                        <div class="col-md-4 d-grid">
                            <form action="<?php echo e(route('productadms.destroy', $product->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button type="submit" class="btn btn-outline-danger btn-lg mt-3 w-100">
                                    <i class="bi bi-trash-fill me-2"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php $__env->startPush('scripts'); ?>
        <script>
            $("#productphoto").change(function() {
                var preview = document.getElementById('preview');
                preview.style.display = 'block';
                const [file] = this.files;
                if (file) {
                    preview.src = URL.createObjectURL(file);
                }
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/admin/productadms/show.blade.php ENDPATH**/ ?>