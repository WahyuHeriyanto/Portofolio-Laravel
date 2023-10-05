
<?php $__env->startSection('container'); ?>
        <h1>Portofolio Me !</h1>
        <p2>Nama <?php echo e($name); ?></p2>
        <p3>Tempat, tanggal lahir <?php echo e($ttl); ?></p3>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\web-laravel\resources\views/portofolio.blade.php ENDPATH**/ ?>