

<?php $__env->startSection('content'); ?>
<div style="align-items: center; text-align:center; margin-left:300px; margin-top:30px; width:70%;" class="container">
<div class="card">
    <div class="card-header">
        <h4 class='m-30'>
            Groups
            <a href="/add-groups">Add</a>
        </h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Goals</th>
                    <th>disGoals</th>
                    <th>Matches</th>
                    <th>Points</th>

                </tr>
            </thead>
            <tbody>
                
                    <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($g->name); ?></td>
                    <td><?php echo e($g->goals); ?></td>
                    <td><?php echo e($g->disGoals); ?></td>
                    <td><?php echo e($g->matches); ?></td>
                    <td><?php echo e($g->points); ?></td>
                    <td><a class='btn btn-danger' href="<?php echo e(url('/delete-group/'.$g->id)); ?>">Delete</a></td>
                    <td><a class='btn btn-primary' href="<?php echo e(url('/edit-group/'.$g->id)); ?>">Edit</a></td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </tbody>
        </table>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hussain\Desktop\cup25\resources\views/admin/groups/index.blade.php ENDPATH**/ ?>