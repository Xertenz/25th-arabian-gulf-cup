

<?php $__env->startSection('content'); ?>

<form action="<?php echo e(url('/insert-news')); ?>" enctype="multipart/form-data"  method='POST' melt>
    <?php echo csrf_field(); ?>

    <div style="align-items: center; text-align:center; margin-left:300px; margin-top:30px; width:70%;" class="container">

<div class="card">
    <div class="card-header">
        <h4>
            Add Matches
            <a href="/matches">Back</a>
        </h4>
    </div>
    <div class="card-body">
    
        <div class="form-group">
            <label>name</label>
            <input type="text" name="name" id="">
        </div>
        <div class="form-group">
            <label>description</label>
            <input type="text" name="description" id="">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" id="">
        </div>
        <div class="form-group">
            <label>image</label>
            <input type="file" name="img" id="">
        </div>
        
        
        <button class='btn btn-danger'>Insert</button>
    </div>
</div>

</div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hussain\Desktop\cup25\resources\views/admin/news/add.blade.php ENDPATH**/ ?>