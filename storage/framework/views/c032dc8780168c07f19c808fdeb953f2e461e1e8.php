

<?php $__env->startSection('content'); ?>

<div class="groups-content">
      <div class="container">
        <div class="group-items">
          <div class="group-item">
            <h2 class="group-title">Group A</h2>
            <table class="group-table">
              <thead>
                <tr>
                  <th>Team</th>
                  <th>W</th>
                  <th>L</th>
                  <th>D</th>
                  <th>Pts</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $group1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($g->name); ?></td>
                <td><?php echo e($g->matches); ?></td>
                <td><?php echo e($g->disGoals); ?></td>
                <td><?php echo e($g->goals); ?></td>
                <td><?php echo e($g->points); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          <div class="group-item">
            <h2 class="group-title">Group B</h2>
            <table class="group-table">
              <thead>
                <tr>
                  <th>Team</th>
                  <th>W</th>
                  <th>L</th>
                  <th>D</th>
                  <th>Pts</th>
                </tr>
              </thead>
              <tbody>
              <?php $__currentLoopData = $group2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($g2->name); ?></td>
                <td><?php echo e($g2->matches); ?></td>
                <td><?php echo e($g2->disGoals); ?></td>
                <td><?php echo e($g2->goals); ?></td>
                <td><?php echo e($g2->points); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- <script src="js/navbar.js"></script> -->
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hussain\Desktop\25th-arabian-gulf-cup\resources\views/pages/groups.blade.php ENDPATH**/ ?>