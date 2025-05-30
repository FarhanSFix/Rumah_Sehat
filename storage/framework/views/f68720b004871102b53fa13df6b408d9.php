<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo e(config('app.name')); ?> - Sistem Informasi Medical Checkup</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?php echo e(asset('medcheck/img/favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('medcheck/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('medcheck/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('medcheck/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('medcheck/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('medcheck/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('medcheck/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('medcheck/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo e(asset('medcheck/css/main.css')); ?>" rel="stylesheet">
  
</head>

<body class="index-page">

  <?php echo $__env->make('site.layouts._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
  <?php echo $__env->yieldContent('content'); ?>
  
  <?php echo $__env->make('site.layouts._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('medcheck/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('medcheck/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('medcheck/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('medcheck/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('medcheck/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
  <script src="<?php echo e(asset('medcheck/vendor/swiper/swiper-bundle.min.js')); ?>"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Main JS File -->
  <script src="<?php echo e(asset('medcheck/js/main.js')); ?>"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    $('#userProfile').on("click", function(){      
      Swal.fire({
        html: `
          Action to: <br><br>
          <div class="d-grid gap-2">
            <a href="/setting" class="btn btn-primary">Settings</a>
            <a href="/logout" class="btn btn-danger">Logout</a>
          </div>
        `,
        showCloseButton: true,
        showConfirmButton: false,
        width : 250,
        position: "top-end"
      });
    });
  </script>

  <?php echo $__env->yieldContent('js'); ?>

</body>

</html><?php /**PATH D:\XAMPP\htdocs\rekam-medis-master\resources\views/site/layouts/master.blade.php ENDPATH**/ ?>