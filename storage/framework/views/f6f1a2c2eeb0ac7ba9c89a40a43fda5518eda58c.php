<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8"/>
      <?php echo SEO::generate(); ?>


    <meta name="author" content="Md. Nurnobi Hosen">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--website-favicon-->
    <link href="<?php echo e(asset('/storage')."/".setting('site.favicon')); ?>" rel="icon">
    <!--plugin-css-->
    <link href="<?php echo e(asset('frontsite')); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('frontsite')); ?>/css/plugin.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
      <!-- template-style-->
    <link href="<?php echo e(asset('frontsite')); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo e(asset('frontsite')); ?>/css/responsive.css" rel="stylesheet">
    <link href="<?php echo e(asset('frontsite')); ?>/css/darkmode.css" rel="stylesheet">
      <?php echo setting('code.header'); ?>

	 </head>
	 <body>
     <?php echo setting('code.body'); ?>

         <?php echo $__env->make('include.front.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('include.front.nav_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->yieldContent('content'); ?>
         <?php echo $__env->make('include.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



         <script>
             <?php if(Session::has('message')): ?>
                 toastr.options =
                 {
                     "closeButton" : true,
                     "progressBar" : true
                 }
             toastr.success("<?php echo e(session('message')); ?>");
             <?php endif; ?>

                 <?php if(Session::has('error')): ?>
                 toastr.options =
                 {
                     "closeButton" : true,
                     "progressBar" : true
                 }
             toastr.error("<?php echo e(session('error')); ?>");
             <?php endif; ?>

                 <?php if(Session::has('info')): ?>
                 toastr.options =
                 {
                     "closeButton" : true,
                     "progressBar" : true
                 }
             toastr.info("<?php echo e(session('info')); ?>");
             <?php endif; ?>

                 <?php if(Session::has('warning')): ?>
                 toastr.options =
                 {
                     "closeButton" : true,
                     "progressBar" : true
                 }
             toastr.warning("<?php echo e(session('warning')); ?>");
             <?php endif; ?>
        </script>
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo e(asset('frontsite')); ?>/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="<?php echo e(asset('frontsite')); ?>/js/jquery.min.js"></script>
        <script src="<?php echo e(asset('frontsite')); ?>/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo e(asset('frontsite')); ?>/js/plugin.min.js"></script>
        <script src="<?php echo e(asset('frontsite')); ?>/js/dark-mode.js"></script>
        <!--common script file-->
        <script src="<?php echo e(asset('frontsite')); ?>/js/main.js"></script>
     <?php echo setting('code.footer'); ?>

    </body>
</html>
<?php /**PATH /home/nurnobis/quizportal.online/resources/views/layouts/front.blade.php ENDPATH**/ ?>