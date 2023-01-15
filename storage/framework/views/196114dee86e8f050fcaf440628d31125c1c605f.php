<?php $__env->startSection('content'); ?>
    <section class="breadcrumb-area banner-1">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                                <h2><?php echo e($quiz->name); ?></h2>
                                <p><?php echo e($quiz->description); ?></p>
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
            <div class="row upset ovr-bg1 ho-gdnt justify-content-center">
                <div class="col-lg-6 col-sm-8 mt30 wow fadeInUp" data-wow-delay=".2s">
                        <a style="margin: 0px" href="<?php echo e(route('portal.start',['id'=>$quiz->id])); ?>">
                            <div class="s-block up-hor ovr-base bg-light">
                                <div class="nn-card-set">
                                    <h4><?php echo e($quiz->name); ?></h4>
                                    <p>
                                        <span>Subject : <?php echo e($quiz->subject->name); ?></span><br>
                                        <span>Duration : <?php echo e($quiz->duration); ?> Min ;
                                        Questions : <?php echo e(count($quiz->mcqs)); ?></span><br>
                                        <span>Positive Mark : <?php echo e($quiz->positive_mark); ?>  ;
                                        Negative Mark : <?php echo e($quiz->negative_mark); ?></span><br>
                                        <span>Total attempt : <?php echo e(count($quiz->results)); ?> Student's</span><br>
                                        <span>Start Time : <?php echo e(date('D d, M Y H:iA', strtotime($quiz->start))); ?></span><br>
                                        <span>End Time : <?php echo e(date('D d, M Y H:iA', strtotime($quiz->end))); ?></span><br>
                                        Type:
                                        <?php $__currentLoopData = $quiz->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($i->name); ?> ,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </p>
                                    <br>
                                    <?php if($quiz->start< date("Y-m-d h:i:s") && $quiz->end> date("Y-m-d h:i:s") ): ?>
                                        <p>Status: Running</p>
                                        <a class="btn btn-warning text-dark d-block" href="<?php echo e(route('portal.start',['id'=>$quiz->id])); ?>">Start Quiz <i class="fas fa-chevron-right fa-icon"></i></a>
                                    <?php elseif($quiz->start > date("Y-m-d h:i:s")): ?>
                                        <p>Status: Upcoming</p>
                                        <a class="btn btn-warning text-dark d-block" >Upcoming <i class="fas fa-chevron-right fa-icon"></i></a>
                                    <?php else: ?>
                                        <p> Status: Previous</p>
                                        <a class="btn btn-warning text-dark d-block" href="<?php echo e(route('portal.start',['id'=>$quiz->id])); ?>">Start Quiz <i class="fas fa-chevron-right fa-icon"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    </div>
            </div>
        </div>
    </section>
    <!--End Portfolio-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nurnobis/quizportal.online/resources/views/front/start.blade.php ENDPATH**/ ?>