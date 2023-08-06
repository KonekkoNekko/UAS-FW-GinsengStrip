<table>
    <thead>
        <tr>
            <th>ID.</th>
            <th>Product Name (Album - Artist)</th>
            <th>Product Price</th>
            <th>Product Photo Filename</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($product->product_album); ?> - <?php echo e($product->product_artist); ?></td>
                <td>Rp. <?php echo e(number_format($product->product_price, 0, ',', '.')); ?></td>
                <td><?php echo e($product->original_filename); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/admin/productadms/export_excel.blade.php ENDPATH**/ ?>