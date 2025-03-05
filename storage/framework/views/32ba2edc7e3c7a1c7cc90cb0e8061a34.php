<section id="pricing" class="pricing section light-background">
  <center>
    <h2>Pricing</h2>
    <hr style="border: solid ; border-color: #0260c4; width:50px ; border-width:3px ">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi</p>
  </center>
  <div class="container">
    <div class="row g-4 justify-content-center">
      <?php $__currentLoopData = $pricingPlans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4">
          <div class="pricing-jutsu <?php echo e($plan->is_popular ? 'popular' : ''); ?>" style="<?php echo e($plan->is_popular ? 'background: var(--accent-color); color: var(--contrast-color);' : ''); ?>">
            <?php if($plan->is_popular): ?>
              <div class="popular-badge"><?php echo e($plan->popular_badge_text); ?></div>
            <?php endif; ?>
            <h3 style="<?php echo e($plan->is_popular ? 'color: white;' : ''); ?>"><?php echo e($plan->plan_name); ?></h3>
            <div class="price">
              <span class="currency"><?php echo e($plan->currency); ?></span>
              <span class="amount"><?php echo e($plan->amount); ?></span>
              <span class="period"><?php echo e($plan->period); ?></span>
            </div><br>
            <p class="description"><?php echo e($plan->description); ?></p>
            <h4 style="<?php echo e($plan->is_popular ? 'color: white;' : ''); ?>">Featured Included:</h4>
            <ul class="features-list">
              <?php $__currentLoopData = json_decode($plan->features, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                  <i class="<?php echo e($feature['icon']); ?>"></i>
                  <span><?php echo e($feature['text']); ?></span>
                </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <a href="#" class="<?php echo e($plan->button_class); ?>">
              <?php echo e($plan->button_text); ?>

              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>
<style>
              .pricing-jutsu {
                height: 100%;
                padding: 2rem;
                background: var(--surface-color);
                border-radius: 1rem;
                transition: all 0.3sease;
                position: relative;
              }

              .pricing .pricing-jutsu .features-list {
                list-style: none;
                padding: 0;
                margin: 0 0 2rem 0;
              }

              .pricing .pricing-jutsu .features-list li i {
                color: var(--accent-color);
                margin-right: 0.75rem;
                font-size: 1.25rem;
              }

              .pricing .pricing-jutsu .features-list li {
                display: flex;
                align-items: center;
                margin-bottom: 1rem;
              }

              .pricing .pricing-justu .features-list li i {
                color: var(--accent-color);
                margin-right: 0.75rem;
                font-size: 1.25rem;
              }

              .pricing .pricing-jutsu .btn .btn-primary {
                background: var(--accent-color);
                border: none;
                color: var(--contrast-color);
              }

              .pricing .pricing-jutsu .btn {
                width: 100%;
                padding: 0.75rem 1.5rem;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 0.5rem;
                font-weight: 500;
                border-radius: 50px;
              }

              .pricing .pricing-jutsu .price .amount {
                font-size: 3.5rem;
                font-weight: 700;
                line-height: 1;
              }

              .pricing .pricing-jutsu .popular {
                background: var(--accent-color);
                color: var(--contrast-color);
              }

              .pricing .pricing-jutsu .popular-badge {
                position: absolute;
                top: -12px;
                left: 50%;
                transform: translateX(-50%);
                background: var(--contrast-color);
                color: var(--accent-color);
                padding: 0.5rem 1rem;
                border-radius: 2rem;
                font-size: 0.875rem;
                font-weight: 600;
                box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.08);
              }
            </style><?php /**PATH D:\ilanding\resources\views/sections/pricing.blade.php ENDPATH**/ ?>