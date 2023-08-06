<div class="d-flex">
    <a href="<?php echo e(route('productadms.show', $product->id)); ?>" class="btn btn-outline-dark btn-sm me-2">
        <i class="bi-person-lines-fill"></i>
    </a>
    <a href="<?php echo e(route('productadms.edit', $product->id)); ?>" class="btn btn-outline-dark btn-sm me-2">
        <i class="bi-pencil-square"></i>
    </a>
    <div>
        <form action="<?php echo e(route('productadms.destroy', $product->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete" data-name="<?php echo e($product->product_album. ' - '.$product->product_artist); ?>">
                <i class="bi-trash"></i>
            </button>
        </form>
    </div>
</div>
<?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/admin/productadms/action.blade.php ENDPATH**/ ?>