

<?php $__env->startSection('content'); ?>


<div class="matches-title-wrapper">
      <div class="container">
        <h1 class="title">المباريات</h1>
      </div>
    </div>
    <div class="matches-content">
      <div class="container">
        <div class="matches-items">
          <?php $__currentLoopData = $matches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="matches-item">
            <div class="team team-1"><img src="<?php echo e(url('uploads/img/'.$m->img1)); ?>" class='team-flag' alt=""><span class="team-name"><?php echo e($m->team1); ?></span></div>
            <div class="match-info"><span class="team-result team-1-result"><?php echo e($m->scour1); ?></span>
              <div class="inner-info"><span class="match-group"><?php echo e($m->groups); ?></span><span class="sign">X</span><span class="date-and-time"><?php echo e($m->date); ?></span></div><span class="team-result team-2-result"><?php echo e($m->scour2); ?></span>
            </div>
            <div class="team team-2"><img src="<?php echo e(url('uploads/img2/'.$m->img2)); ?>" class='team-flag' alt=""><span class="team-name"><?php echo e($m->team1); ?></span></div>
          </div>
          
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </div>
      </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hussain\Desktop\cup25\resources\views/pages/watches.blade.php ENDPATH**/ ?>