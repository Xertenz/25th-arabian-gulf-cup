

<?php $__env->startSection('content'); ?>

<form action="<?php echo e(url('/insert-groups')); ?>" method='POST'>
    <?php echo csrf_field(); ?>

    <div style="align-items: center; text-align:center; margin-left:300px; margin-top:30px; width:70%;" class="container">

<div class="card">
    <div class="card-header">
        <h4>
            Add Groups
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
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small style='font-size:20px' class='form-text text-danger'><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <select name="typeGroup" id="">
            <option>select group</option>
            <option>1</option>
            <option>2</option>

        </select>
        <?php $__errorArgs = ['typeGroup'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small style='font-size:20px' class='form-text text-danger'><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="form-group">
            <label>Matches</label>
            <input type="text" name="matches" id="">
            <?php $__errorArgs = ['matches'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small style='font-size:20px' class='form-text text-danger'><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        <div class="form-group">
            <label>goals</label>
            <input type="text" name="goals" id="">
            <?php $__errorArgs = ['goals'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small style='font-size:20px' class='form-text text-danger'><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label>dis Goals</label>
            <input type="text" name="disGoals" id="">
            <?php $__errorArgs = ['disGoals'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small style='font-size:20px' class='form-text text-danger'><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label>Points</label>
            <input type="text" name="points" id="">
            <?php $__errorArgs = ['points'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small style='font-size:20px' class='form-text text-danger'><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <button class='btn btn-danger'>Insert</button>
    </div>
</div>

</div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hussain\Desktop\25th-arabian-gulf-cup\resources\views/admin/groups/add.blade.php ENDPATH**/ ?>