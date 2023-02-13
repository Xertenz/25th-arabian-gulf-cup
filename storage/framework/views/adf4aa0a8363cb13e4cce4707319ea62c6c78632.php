

<?php $__env->startSection('content'); ?>


<div style="align-items: center; text-align:center; margin-left:300px; margin-top:30px; width:70%;" class="container">
<div class="card">
    <div class="card-header">
        <h4 class='m-30'>
            News
            <a href="/add-news">Add</a>
        </h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($n->name); ?></td>
                <td><?php echo e($n->description); ?></td>
                <td><?php echo e($n->date); ?></td>
                <td><img src="<?php echo e(url('uploads/img/'.$n->img)); ?>" width='10%' alt=""></td>
                <td><a href="<?php echo e(url('delete-news/'.$n->id)); ?>">Delete</a></td>
                <td><a href="<?php echo e(url('edit-news/'.$n->id)); ?>">Edit</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hussain\Desktop\cup25\resources\views/admin/news/index.blade.php ENDPATH**/ ?>