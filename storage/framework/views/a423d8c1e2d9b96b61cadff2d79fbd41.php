<h1>Список товаров</h1>

<ul>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($product->name); ?> - <?php echo e($product->price); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH C:\Users\seaniwe\Desktop\app\resources\views/pages/products.blade.php ENDPATH**/ ?>