<?php $__env->startSection('content'); ?>
    <div class="col-span-12 mt-8">
        <div class="intro-y flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                My Results
            </h2>
            <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-span-12 sm:col-span-12 xl:col-span-6">

                <div class="report-box">
                    <div class="box p-2">
                        <h3>Name : <?php echo e($r->user->name); ?></h3>
                        <p>Subject Name: <?php echo e($r->quiz->subject->name); ?></p>
                        <p>Exam Name: <?php echo e($r->quiz->name); ?></p>
                        <p>
                            <strong> Mark : <?php echo e($r->mark); ?> / <?php echo e($r->quiz->mcqs->count() * $r->quiz->positive_mark); ?></strong>
                        </p>
                        <p>Attempt : <?php echo e($r->ca + $r->wa); ?> | Correct : <?php echo e($r->ca); ?> | Avoid : <?php echo e($r->na); ?> | Wrong :<?php echo e($r->wa); ?></p>
                        <div style="font-size: 14px;">Submitted : <?php echo e(date('h:i A d M Y', strtotime($r->created_at))); ?></div>
                        <div style="font-size: 14px;">Duration : <?php echo e(floor($r->time / 60)); ?> Minutes
                            <?php echo e($r->time % 60); ?> Seconds</div>



                        <p class="font-weight-300 text-success" style="font-size: 14px;"><i> (
                                        <?php echo e($r->quiz->postive_mark); ?>

                                        Mark for Per Correct Answer )</i></p>
                        <p class="font-weight-300 text-danger" style="font-size: 14px;"><i> (
                                        <?php echo e($r->quiz->negative_mark); ?>

                                        Mark for Per Negative Answer )</i></p>
                        <a class="btn btn-info m-1" href="<?php echo e(route('portal.single_result',['id'=>$r->id])); ?>" target="_blank" rel="noopener noreferrer"><i class="ri-download-2-line"></i>Check Your Answer</a>
                    </div>
                </div>


            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.student_portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nurnobis/quizportal.online/resources/views/std_portal/results.blade.php ENDPATH**/ ?>