<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title>Page not Found</title>
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
    <!-- template-style-->
    <link href="<?php echo e(asset('frontsite')); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo e(asset('frontsite')); ?>/css/responsive.css" rel="stylesheet">
    <link href="<?php echo e(asset('frontsite')); ?>/css/darkmode.css" rel="stylesheet">
</head>
<body>
<?php echo $__env->make('include.front.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('include.front.nav_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--Start 404 Error-->
<section class="error bg-gradient pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt50 mb50">
                <div class="layer-div">
                    <div class="error-block">
                        <h1>Page not Found</h1>
                        <p>This Link isn't available anymore.</p>
                        <div class="images mt20">
                            <img src="<?php echo e(asset('frontsite')); ?>/images/shape/error-page.png" alt="error page" class="img-fluid"/>
                        </div>
                        <a href="<?php echo e(route('front')); ?>" class="btn-outline">Go Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End 404 Error-->

<!-- js placed at the end of the document so the pages load faster -->
<script src="<?php echo e(asset('frontsite')); ?>/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="<?php echo e(asset('frontsite')); ?>/js/jquery.min.js"></script>
<script src="<?php echo e(asset('frontsite')); ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(asset('frontsite')); ?>/js/plugin.min.js"></script>
<script src="<?php echo e(asset('frontsite')); ?>/js/main.js"></script>
<!--common script file-->
<script src="<?php echo e(asset('frontsite')); ?>/js/main.js"></script>
</body>
</html><?php /**PATH E:\defence\resources\views/errors/404.blade.php ENDPATH**/ ?>