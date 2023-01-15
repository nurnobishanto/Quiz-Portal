<?php $__env->startSection('content'); ?>

    <!--Start First Section-->
    <?php if(setting('site.about.1.title') || setting('site.about.1.content')): ?>
        <section class="breadcrumb-area text-l banner-1">
            <div class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 v-center">
                            <div class="bread-inner">
                                <div class="bread-menu">
                                    <ul>
                                        <li><a href="<?php echo e(route('front')); ?>">Home</a></li>
                                        <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                                    </ul>
                                </div>
                                <div class="bread-title">
                                    <h2><?php echo e(setting('site.about.1.title')); ?></h2>
                                    <p class="pt20"><?php echo e(setting('site.about.1.content')); ?></p>
                                    <a href="<?php echo e(route('contact')); ?>" class="btn-main bg-btn lnk mt30">Contact Us <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 v-center">
                            <div class="img-design h-scl-">
                                <?php if(setting('site.about.1.image')): ?>
                                <div class="imgac "> <img src="<?php echo e(asset('storage')."/".setting('site.about.1.image')); ?>" alt="<?php echo e(setting('site.about.1.title')); ?>" class="ag-dg1 img-fluid h-scl-base"></div>
                                <?php endif; ?>
                                <?php if(setting('site.about.1.image2')): ?>
                                <div class="imgac h-scl-base"><img src="<?php echo e(asset('storage')."/".setting('site.about.1.image2')); ?>" alt="<?php echo e(setting('site.about.1.title')); ?>" class="ag-dg2 img-fluid "></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!--End First Section-->
    <!--Start Second Section-->
    <?php if(setting('site.about.2.title') || setting('site.about.2.content')): ?>
        <section class="about-agencys pad-tb block-1">
            <div class="container">
                <div class="row">
                    <?php if(setting('site.about.2.image')): ?>
                    <div class="col-lg-5 v-center">
                        <div class="image-block upset bg-shape wow fadeIn">
                            <img src="<?php echo e(asset('storage/')."/".setting('site.about.2.image')); ?>" alt="<?php echo e(setting('site.about.2.title')); ?>" class="img-fluid"/>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="col-lg-7">
                        <div class="common-heading text-l">
                            <h2 class="mb0"><?php echo e(setting('site.about.2.title')); ?></h2>
                            <p class="pt20"><?php echo e(setting('site.about.2.content')); ?> </p>
                            <?php if(setting('site.about.3.url')): ?>
                                <a href="<?php echo e(setting('site.about.2.url')); ?>" class="btn-main bg-btn3 lnk mt30">
                                    <?php if(setting('site.about.2.button')): ?>
                                        <?php echo e(setting('site.about.2.button')); ?>

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
    <?php if(setting('site.about.3.title') || setting('site.about.3.content')): ?>
        <section class="about-agency pad-tb hero-bg-bg1 bg-gradient1 dark-bg1 ">
            <div class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 v-center">
                            <div class="header-heading">
                                <h1 class="wow fadeInUp" data-wow-delay=".2s"><?php echo e(setting('site.about.3.title')); ?></h1>
                                <p class="wow fadeInUp" data-wow-delay=".4s"><?php echo e(setting('site.about.3.content')); ?></p>
                                <?php if(setting('site.about.3.url')): ?>
                                    <a href="<?php echo e(setting('site.about.3.url')); ?>" class="btn-main bg-btn lnk wow fadeInUp" data-wow-delay=".6s">
                                        <?php if(setting('site.about.3.button')): ?>
                                            <?php echo e(setting('site.about.3.button')); ?>

                                        <?php else: ?>
                                            View More
                                        <?php endif; ?>
                                        <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if(setting('site.about.3.image')): ?>
                            <div class="col-lg-6 v-center">
                                <div class="single-image wow fadeIn" data-wow-delay=".5s">
                                    <img src="<?php echo e(asset('storage/')."/".setting('site.about.3.image')); ?>" alt="<?php echo e(setting('site.about.3.title')); ?>" class="img-fluid"/>
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

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nurnobis/quizportal.online/resources/views/front/about.blade.php ENDPATH**/ ?>