

<?php $__env->startSection('content'); ?>

<form action="<?php echo e(url('/update-group/'.$group->id)); ?>" method='POST'>
    <?php echo csrf_field(); ?>
    @PUT

    <div style="align-items: center; text-align:center; margin-left:300px; margin-top:30px; width:70%;" class="container">

<div class="card">
    <div class="card-header">
        <h4>
            Update Groups
            <a href="/admin/groups">Back</a>
        </h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <select name='name'>
                <option>Select Team</option>
                <option>العراق</option>
                <option>السعودية</option>
                <option>اليمن</option>
                <option>الكويت</option>
                <option>عمان</option>
                <option>البحرين</option>
                <option>قطر</option>
                <option>الامارات</option>

            </select>
        </div>
        <select name="typeGroup" id="">
            <option>select group</option>
            <option>1</option>
            <option>2</option>

        </select>
        <div class="form-group">
            <label>Matches</label>
            <input type="text" value='<?php echo e($group->matches); ?>' name="matches" id="">
        </div>
        
        <div class="form-group">
            <label>goals</label>
            <input type="text" value='<?php echo e($group->goals); ?>' name="goals" id="">
        </div>
        <div class="form-group">
            <label>dis Goals</label>
            <input type="text" value='<?php echo e($group->disGoals); ?>' name="disGoals" id="">
        </div>
        <div class="form-group">
            <label>Points</label>
            <input type="text" value='<?php echo e($group->points); ?>' name="points" id="">
        </div>
        <button class='btn btn-danger'>Insert</button>
    </div>
</div>

</div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hussain\Desktop\cup25\resources\views/admin/groups/edit.blade.php ENDPATH**/ ?>