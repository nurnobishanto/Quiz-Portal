<?php $__env->startSection('content'); ?>
    <!--Breadcrumb Area-->
    <section class="breadcrumb-area banner-1">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu">
                                <ul>
                                    <li><a href="<?php echo e(route('front')); ?>">Home</a></li>
                                    <li><a href="<?php echo e(route('terms')); ?>">Terms & Condition</a></li>
                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2>Terms & Condition</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start Blog Grid-->
    <section class="blog-page pad-tb pt40">
        <div class="container ">
            <div class="blog-content">
                <?php echo setting('site.terms'); ?>

            </div>

        </div>
    </section>
    <!--End Blog Grid-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nurnobis/quizportal.online/resources/views/front/terms.blade.php ENDPATH**/ ?>