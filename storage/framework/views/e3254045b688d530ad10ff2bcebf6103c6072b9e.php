<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('pages.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>

<?php echo $__env->make('pages.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('pages.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\Users\hussain\Desktop\25th-arabian-gulf-cup\resources\views/pages/master.blade.php ENDPATH**/ ?>