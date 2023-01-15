<?php $__env->startSection('content'); ?>
    <section class="breadcrumb-area banner-1">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                                <h2>All Subjects</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start Enquire Form-->
    <section class="element-page pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading">
                        <h2 class="mb30">Select a Subject</h2>
                    </div>
                </div>
            </div>
            <div class="row upset ovr-bg1 ho-gdnt">
                <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                    <a href="<?php echo e(route('front.subject',['slug'=>$subject->slug])); ?>">
                        <div class="s-block up-hor ovr-base bg-info">
                            <div class="nn-card-set">
                                <h4><?php echo e($subject->name); ?></h4>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>






        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nurnobis/quizportal.online/resources/views/front/exam.blade.php ENDPATH**/ ?>