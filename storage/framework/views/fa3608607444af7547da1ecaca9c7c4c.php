<section id="about" class="about section">
  <div class="container">
    <div class="row gy-4 align-items-center justify-content-between">
      <div class="col-xl-5">
        <span class="about-meta"><?php echo e($about->meta); ?></span>
        <h2><?php echo e($about->heading); ?></h2>
        <p><?php echo e($about->description); ?></p>

        <div class="row feature-list-wrapper">
          <div class="col-md-6">
            <ul class="feature-list">
              <?php $__currentLoopData = json_decode($about->features_left, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                  <i class="<?php echo e($feature['icon']); ?>"></i>
                  <span><?php echo e($feature['text']); ?></span>
                </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="feature-list">
              <?php $__currentLoopData = json_decode($about->features_right, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                  <i class="<?php echo e($feature['icon']); ?>"></i>
                  <span><?php echo e($feature['text']); ?></span>
                </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
        </div>

        <div class="info-wrapper">
          <div class="row gy-4">
            <div class="col-lg-5">
              <div class="profile d-flex align-items-center gap-3">
                <img src="<?php echo e(asset($about->ceo_image)); ?>" alt="CEO Profile" class="profile-image">
                <div>
                  <h4 class="profile"><?php echo e($about->ceo_name); ?></h4>
                  <p class="profile-position"><?php echo e($about->ceo_position); ?></p>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="contact-info d-flex align-items-center gap-2">
                <i class="bi bi-telephone-fill"></i>
                <div>
                  <p class="contact-nick"><?php echo e($about->contact_label); ?></p>
                  <p class="contact-nicklaus"><?php echo e($about->contact_number); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-6">
        <div class="image-wrapper">
          <div class="images position-relative">
            <img src="<?php echo e(asset($about->main_image)); ?>" alt="Business Meeting" class="img-fluid main-image rounded-4">
            <img src="<?php echo e(asset($about->small_image)); ?>" alt="Team Discussion" class="img-fluid small-image rounded-4">
          </div>
          <div class="experience-badge">
            <h3><?php echo e($about->experience_years); ?> <span>Years</span></h3>
            <p><?php echo e($about->experience_text); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><?php /**PATH D:\ilanding\resources\views/sections/about.blade.php ENDPATH**/ ?>