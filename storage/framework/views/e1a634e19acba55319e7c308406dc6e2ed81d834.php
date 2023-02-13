

<?php $__env->startSection('content'); ?>


<div style="align-items: center; text-align:center; margin-left:300px; margin-top:30px; width:70%;" class="container">
<div class="card">
    <div class="card-header">
        <h4 class='m-30'>
            Matches
            <a href="/add-match">Add</a>
        </h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>team1</th>
                    <th>team2</th>
                    <th>scour1</th>
                    <th>scour2</th>
                    <th>group type</th>
                    <th>date</th>
                    <th>img1</th>
                    <th>img2</th>

                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $matches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                    <td><?php echo e($m->team1); ?></td>
                    <td><?php echo e($m->team2); ?></td>
                    <td><?php echo e($m->scour1); ?></td>
                    <td><?php echo e($m->scour2); ?></td>
                    <td><?php echo e($m->groups); ?></td>
                    <td><?php echo e($m->date); ?></td>
                    <td><img width='50%' src="<?php echo e(url('/uploads/img/'.$m->img1)); ?>" alt=""></td>
                    <td><a href="<?php echo e(url('/match-delete/'.$m->id)); ?>">Delete</a></td>
                    <td><a href="<?php echo e(url('/match-edit/'.$m->id)); ?>">Edit</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hussain\Desktop\cup25\resources\views/admin/matches/index.blade.php ENDPATH**/ ?>