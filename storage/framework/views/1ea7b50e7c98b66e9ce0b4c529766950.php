<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
  <link rel="manifest" href="/manifest.json">
  <link rel="icon" href="<?php echo e(asset('front/images/khelmoj123.png')); ?>" />
  <title>AK Adda| Khelo Dil se, Jeeto Dimag se</title>
  <meta content="KhelBro" name="description">
  <meta content="ludo khelo,online ludo, online games, play with real players, best ludo website, ludo earning, earn by playing ludo, playing ludo king,  ludo contest, Best Ludo website in kota , ludo tournament , ludo khelo paise kamao, khelo ludo, Ludo Players, Ludo king." name="keywords">

  <?php echo $__env->yieldContent('cache_meta'); ?>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,600,700,800,900">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('front/css/bootstrap.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('front/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('front/css/responsive.css')); ?>">

	<?php echo $__env->yieldContent('styles'); ?>
	<script src="<?php echo e(asset('front/js/jquery-3.6.1.min.js')); ?>"></script>


</head>

<body>

    <?php echo $__env->make('partials.front.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="leftContainer">
      <?php echo $__env->make('partials.front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('partials.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html>
<?php /**PATH C:\Web\sample-project\resources\views\layouts\front\front.blade.php ENDPATH**/ ?>