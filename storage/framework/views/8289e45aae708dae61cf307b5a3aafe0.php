<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $__env->yieldContent('title', 'Nicklaus Demo Project'); ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo e(asset('assets/css/main.css')); ?>" rel="stylesheet">
</head>

<body class="index-page">

  <!-- Header -->
  <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Main Content -->
  <?php echo $__env->yieldContent('content'); ?>

  <!-- Footer -->
  <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>

  <!-- Main JS File -->
  <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

</body>

</html><?php /**PATH D:\ilanding\resources\views/layouts/app.blade.php ENDPATH**/ ?>