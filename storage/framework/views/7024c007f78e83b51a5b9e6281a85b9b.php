<?php $__env->startSection('content'); ?>
    <div class="card rounded-4">
        <div class="row g-0">
            <form action="<?php echo e(route('productadms.update', $product->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="p-5">
                    <div class="d-flex mb-3 text-start">
                        <i class="bi-pencil-square fs-2"></i>
                        <h1 class="ms-3">Edit Product</h1>
                    </div>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="productAlbum" class="form-label">Product Album</label>
                                    <input class="form-control <?php $__errorArgs = ['productAlbum'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                        name="productAlbum" id="productAlbum"
                                        value="<?php echo e($errors->any() ? old('productAlbum') : $product->product_album); ?>"
                                        placeholder="Enter Product Album">
                                    <?php $__errorArgs = ['productAlbum'];
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
                                    <label for="productArtist" class="form-label">Product Artist</label>
                                    <input class="form-control <?php $__errorArgs = ['productArtist'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                        name="productArtist" id="productArtist"
                                        value="<?php echo e($errors->any() ? old('productArtist') : $product->product_artist); ?>"
                                        placeholder="Enter Product Artist">
                                    <?php $__errorArgs = ['productArtist'];
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
                                    <label for="productPrice" class="form-label">Product Price</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                        <input class="form-control <?php $__errorArgs = ['productPrice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            type="text" name="productPrice" id="productPrice"
                                            value="<?php echo e($errors->any() ? old('productPrice') : $product->product_price); ?>"
                                            placeholder="Enter Product Price">
                                    </div>
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
                                <label for="productphoto" class="form-label">Product Photo</label>
                                <input type="file" class="form-control" name="productphoto" id="productphoto">
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <label for="photoPreview" class="form-label">Currently Stored Photo</label>
                                    <?php if($product->original_filename): ?>
                                        <h5><?php echo e($product->original_filename); ?></h5>
                                        <a href="<?php echo e(route('productadms.downloadFile', ['id' => $product->id])); ?>"
                                            class="btn btn-primary btn-sm mt-2">
                                            <i class="bi bi-download me-1"></i> Download Stored Image
                                        </a>
                                    <?php else: ?>
                                        <h5>Tidak ada</h5>
                                    <?php endif; ?>
                                    <img src="<?php echo e(asset('/storage/products/' . $product->original_filename)); ?>"
                                        alt="your image" class="mt-3 img-thumnail" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="<?php echo e(route('productadms.index')); ?>" class="btn btn-outline-dark btn-lg mt-3">
                                <i class="bi-arrow-left-circle me-2"></i>
                                Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3">
                                <i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </form>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/admin/productadms/edit.blade.php ENDPATH**/ ?>