

<?php $__env->startSection('content'); ?>


<div class="news-title-wrapper">
      <div class="container">
        <h1 class="title">أخر الأخبار</h1>
      </div>
    </div>
    <div class="news-content">
      <div class="container">
        <div class="news-items">
          <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a class="news-item" href="#">
            <div class="news-item-img"><img src="<?php echo e(url('uploads/img/'.$n->img)); ?>" alt="First News Item"></div>
            <div class="news-item-info">
              <h3 class="news-item-title"><?php echo e($n->name); ?></h3>
              <p class="news-item-description"><?php echo e($n->description); ?></p>
              <p class="news-item-date"><?php echo e($n->date); ?></p>
            </div>
          </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
      </div>
      <!-- <script src="js/navbar.js"></script> -->
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hussain\Desktop\cup25\resources\views/pages/news.blade.php ENDPATH**/ ?>