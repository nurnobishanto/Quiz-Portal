
<?php $__env->startSection('content'); ?>
    <!--Start First Section-->
    <?php if(setting('site.home.1.title') || setting('site.home.1.content')): ?>
    <section class="hero-section hero-bg-bg1 bg-gradient1 dark-bg1">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 v-center">
                        <div class="header-heading">
                            <h1 class="wow fadeInUp" data-wow-delay=".2s"><?php echo e(setting('site.home.1.title')); ?></h1>
                            <p class="wow fadeInUp" data-wow-delay=".4s"><?php echo e(setting('site.home.1.content')); ?></p>
                            <?php if(setting('site.home.1.url')): ?>
                            <a href="<?php echo e(setting('site.home.1.url')); ?>" class="btn-main bg-btn lnk wow fadeInUp" data-wow-delay=".6s">
                               <?php if(setting('site.home.1.button')): ?>
                                <?php echo e(setting('site.home.1.button')); ?>

                                <?php else: ?>
                                   View More
                                <?php endif; ?>
                                <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if(setting('site.home.1.image')): ?>
                    <div class="col-lg-6 v-center">
                        <div class="single-image wow fadeIn" data-wow-delay=".5s">
                            <img src="<?php echo e(asset('storage/')."/".setting('site.home.1.image')); ?>" alt="<?php echo e(setting('site.home.1.title')); ?>" class="img-fluid"/>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!--End First Section-->
    <!--Start Second Section-->
    <?php if(setting('site.home.2.title') || setting('site.home.2.content')): ?>
    <section class="about-agency pad-tb">
        <div class="container">
            <div class="row">
                <?php if(setting('site.home.2.image')): ?>
                <div class="col-lg-6 v-center">
                    <div class="image-block">
                        <img src="<?php echo e(asset('storage/')."/".setting('site.home.2.image')); ?>" alt="<?php echo e(setting('site.home.2.title')); ?>" class="img-fluid no-shadow"/>
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-lg-6">
                    <div class="common-heading text-l">
                        <h2><?php echo e(setting('site.home.2.title')); ?></h2>
                        <p><?php echo e(setting('site.home.2.content')); ?></p>
                        <?php if(setting('site.home.2.url')): ?>
                        <a href="<?php echo e(setting('site.home.2.url')); ?>" class="btn-main bg-btn lnk mt30">
                            <?php if(setting('site.home.2.button')): ?>
                                <?php echo e(setting('site.home.2.button')); ?>

                            <?php else: ?>
                                View More
                            <?php endif; ?>
                            <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!--End Second Section-->
    <!--Start Third Section-->
    <?php if(setting('site.home.3.title') || setting('site.home.3.content')): ?>
    <section class="hero-section hero-bg-bg1 bg-gradient1 dark-bg1">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 v-center">
                        <div class="header-heading">
                            <h1 class="wow fadeInUp" data-wow-delay=".2s"><?php echo e(setting('site.home.3.title')); ?></h1>
                            <p class="wow fadeInUp" data-wow-delay=".4s"><?php echo e(setting('site.home.3.content')); ?></p>
                            <?php if(setting('site.home.3.url')): ?>
                                <a href="<?php echo e(setting('site.home.3.url')); ?>" class="btn-main bg-btn lnk wow fadeInUp" data-wow-delay=".6s">
                                    <?php if(setting('site.home.3.button')): ?>
                                        <?php echo e(setting('site.home.3.button')); ?>

                                    <?php else: ?>
                                        View More
                                    <?php endif; ?>
                                    <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if(setting('site.home.3.image')): ?>
                        <div class="col-lg-6 v-center">
                            <div class="single-image wow fadeIn" data-wow-delay=".5s">
                                <img src="<?php echo e(asset('storage/')."/".setting('site.home.3.image')); ?>" alt="<?php echo e(setting('site.home.3.title')); ?>" class="img-fluid"/>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!--End Third Section-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\defence\resources\views/front/home.blade.php ENDPATH**/ ?>