


<?php $__env->startSection('container'); ?>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="mb-5">
            <h2>
                <a href="/blog/<?php echo e($post["slug"]); ?>"><?php echo e($post ["title"]); ?></a>
            </h2>
            <h5><?php echo e($post ["date"]); ?></h2>
            <p><?php echo e($post ["body"]); ?></p>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\web-laravel\resources\views/blog.blade.php ENDPATH**/ ?>