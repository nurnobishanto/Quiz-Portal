<?php $__env->startSection('content'); ?>
    <section class="breadcrumb-area banner-1">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                                <h2><?php echo e($exam_category->name); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->

    <!--Start Portfolio-->
    <section class="portfolio-page pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading">
                        <h3 class="mb30">Select a Quiz  for <?php echo e($exam_category->name); ?></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-left">
                <div class="col v-center">
                    <div class="filters">
                        <ul class="filter-menu">
                            <li data-filter="*" class="is-checked">All</li>
                            <li data-filter=".running" >Running</li>
                            <li data-filter=".upcoming" >Upcoming</li>
                            <li data-filter=".previous" >Previous</li>
                            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li data-filter=".<?php echo e($item->slug); ?>"><?php echo e($item->name); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row card-list upset ovr-bg1 ho-gdnt">
                <div class="col-lg-4 col-md-6 grid-sizer "></div>
                <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-sm-6 single-card-item mt30 wow fadeInUp
                    <?php $__currentLoopData = $item->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($i->slug); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php if($item->start< date("Y-m-d h:i:s") && $item->end> date("Y-m-d h:i:s") ): ?> running <?php elseif($item->start> date("Y-m-d h:i:s")): ?> upcoming <?php else: ?> previous <?php endif; ?>">
                        <a style="margin: 0px" href="<?php echo e(route('front.quiz.start',['id'=>$item->id])); ?>">
                            <div class="s-block up-hor ovr-base bg-light">
                                <div class="nn-card-set">
                                    <h5><?php echo e($item->name); ?></h5>
                                    <p>
                                        <span>Subject : <?php echo e($item->subject->name); ?></span><br>
                                        <span>Duration : <?php echo e($item->duration); ?> Min ;
                                        Questions : <?php echo e(count($item->mcqs)); ?></span><br>
                                        <span>Start Time : <?php echo e(date('D d, M Y H:iA', strtotime($item->start))); ?></span><br>
                                        <span>End Time : <?php echo e(date('D d, M Y H:iA', strtotime($item->end))); ?></span><br>
                                        Type:
                                        <?php $__currentLoopData = $item->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($i->name); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </p>
                                    <br>
                                    <?php if($item->start< date("Y-m-d h:i:s") && $item->end> date("Y-m-d h:i:s") ): ?>
                                        <p>Status: Running</p>
                                    <?php elseif($item->start> date("Y-m-d h:i:s")): ?>
                                        <p>Status: Upcoming</p>
                                    <?php else: ?>
                                        <p> Status: Previous</p>
                                    <?php endif; ?>
                                    <a class="btn btn-warning text-dark" href="<?php echo e(route('front.quiz.start',['id'=>$item->id])); ?>">Start Quiz <i class="fas fa-chevron-right fa-icon"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>
    <!--End Portfolio-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nurnobis/quizportal.online/resources/views/front/quiz.blade.php ENDPATH**/ ?>