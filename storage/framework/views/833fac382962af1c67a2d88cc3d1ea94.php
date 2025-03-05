<section id="features" class="features section">
  <center>
    <h2><?php echo e($features[0]->title); ?></h2>
    <hr style="border: solid ; border-color: #0260c4; width:50px ; border-width:3px ">
    <p><?php echo e($features[0]->subtitle); ?></p>
  </center>
  <div class="container">
    <div class="d-flex justify-content-center" style="padding-left: 400px;">
      <ul class="nav nav-tabs">
        <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="nav-item">
            <a class="nav-link <?php echo e($loop->first ? 'active show' : ''); ?>" data-bs-toggle="tab" data-bs-target="#features-tab-<?php echo e($loop->iteration); ?>">
              <h4><?php echo e($feature->tab_title); ?></h4>
            </a>
          </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>

    <div class="tab-content">
      <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="tab-pane fade <?php echo e($loop->first ? 'active show' : ''); ?>" id="features-tab-<?php echo e($loop->iteration); ?>">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
              <h3><?php echo e($feature->heading); ?></h3>
              <p class="fst-italic"><?php echo e($feature->description); ?></p>
              <ul>
                <?php $__currentLoopData = json_decode($feature->features, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li>
                    <i class="<?php echo e($item['icon']); ?>"></i>
                    <span><?php echo e($item['text']); ?></span>
                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="<?php echo e(asset($feature->image)); ?>" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>

<section id="features-cards" class="features-cards section">
  <div class="container">
    <div class="row gy-4">
      <?php $__currentLoopData = $featureCards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xl-3 col-md-6">
          <div class="feature-box" style="background-color: <?php echo e($card->background_color); ?>;">
            <i class="<?php echo e($card->icon); ?>"></i>
            <h4><?php echo e($card->title); ?></h4>
            <p><?php echo e($card->description); ?></p>
          </div>
        </div><!-- End Feature Box -->
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section><?php /**PATH D:\ilanding\resources\views/sections/features.blade.php ENDPATH**/ ?>