

<?php $__env->startSection('content'); ?>

<form action="<?php echo e(url('/update-match/'.$match->id)); ?>" enctype="multipart/form-data"  method='POST' melt>
    <?php echo csrf_field(); ?>

    <div style="align-items: center; text-align:center; margin-left:300px; margin-top:30px; width:70%;" class="container">

<div class="card">
    <div class="card-header">
        <h4>
            Edit Matches
            <a href="/matches">Back</a>
        </h4>
    </div>
    <div class="card-body">
        
        <select name="groups" id="">
            <option>select group</option>
            <option>1</option>
            <option>2</option>

        </select>
        <div class="form-group">
            <label>team1</label>
            <input type="text" value='<?php echo e($match->team1); ?>' name="team1" id="">
        </div>
        <div class="form-group">
            <label>team2</label>
            <input type="text" value='<?php echo e($match->team2); ?>' name="team2" id="">
        </div>
        
        <div class="form-group">
            <label>scour1</label>
            <input type="text" name="scour1" value='<?php echo e($match->scour1); ?>' id="">
        </div>
        <div class="form-group">
            <label>scour2</label>
            <input type="text" value='<?php echo e($match->scour2); ?>' name="scour2" id="">
        </div>
        <div class="form-group">
            <label>date</label>
            <input type="date" value='<?php echo e($match->date); ?>' name="date" id="">
        </div>
        
        <div class="form-group">
            <label>img1</label>
            <input type="file" name="img1" id="">
        </div>
        <div class="form-group">
            <label>img2</label>
            <input type="file" name="img2" id="">
        </div>
        

        <button class='btn btn-danger'>Insert</button>
    </div>
</div>

</div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hussain\Desktop\cup25\resources\views/admin/matches/edit.blade.php ENDPATH**/ ?>