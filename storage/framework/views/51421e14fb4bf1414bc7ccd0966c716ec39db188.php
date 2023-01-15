<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="<?php echo e(asset('storage')."/".setting('site.favicon')); ?>" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Md. Nurnobi Hosen">
        <?php echo SEO::generate(); ?>

        <!-- BEGIN: CSS Assets-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="<?php echo e(asset('student_portal')); ?>/css/app.css" />
        <!-- END: CSS Assets-->

        <?php echo setting('code.header'); ?>


    </head>
    <!-- END: Head -->
    <body class="py-5" style="background-color:
    <?php if(strlen(setting('portal.bg.color'))==7): ?><?php echo e(setting('portal.bg.color')); ?>

    <?php elseif((int)date("i")%2==0): ?>
      #EC2C98
    <?php else: ?>
    #4765D3

    <?php endif; ?>;color: black;">
    <!-- BEGIN: Mobile Menu -->
    <?php echo setting('code.body'); ?>

      <?php echo $__env->make('include.std_portal.mobile_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Mobile Menu -->
        <div class="flex mt-[4.7rem] md:mt-0">
            <!-- BEGIN: Side Menu -->
            <?php echo $__env->make('include.std_portal.side_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <?php echo $__env->make('include.std_portal.top_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- END: Top Bar -->
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <!-- END: Content -->
        </div>



    <!-- BEGIN: JS Assets-->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
    <script src="<?php echo e(asset('student_portal')); ?>/js/app.js"></script>
<!-- END: JS Assets-->
    <?php echo setting('code.footer'); ?>

    </body>
</html>
<?php /**PATH /home/nurnobis/quizportal.online/resources/views/layouts/student_portal.blade.php ENDPATH**/ ?>