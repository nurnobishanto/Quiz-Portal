<?php $__env->startSection('content'); ?>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Select a Quiz  for this <?php echo e($category->name); ?> Subject
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">

                        <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($date > $quiz->end): ?>
                            <div class="col-span-12 sm:col-span-12 xl:col-span-6 intro-y">
                                <div class="zoom-in">
                                    <div class="box p-5 text-center">
                                        <div class="text-3xl font-medium leading-8 ">
                                            <a href="<?php echo e(route('portal.q_bank.ans',['id'=>$quiz->id])); ?>"><?php echo e($quiz->name); ?></a>
                                        </div>
                                        <p class="p-2">
                                            <p class="p-1">
                                                <strong class="btn btn-info text-dark">Subject : <?php echo e($quiz->subject->name); ?></strong>
                                            </p>
                                            <p class="p-1">
                                                <span class="btn btn-warning text-dark m-2">Duration : <?php echo e($quiz->duration); ?> Min</span>
                                                <span class="btn btn-warning text-dark m-2">Questions : <?php echo e(count($quiz->mcqs)); ?></span>
                                            </p>

                                            <p class="p-1">
                                                <span class="text-light btn-success btn m-2">Positive Mark : <?php echo e($quiz->positive_mark); ?></span>
                                                <span class="text-light btn-danger btn m-2">Negative Mark : <?php echo e($quiz->negative_mark); ?></span>
                                            </p>
                                            <span class="text-success">Start Time : <?php echo e($quiz->start); ?></span><br>
                                            <span class="text-danger">End Time : <?php echo e($quiz->end); ?></span><br>
                                            <strong>Question Type :</strong>

                                            <?php $__currentLoopData = $quiz->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($i->name); ?>,
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <p class="p-1">
                                            <a href="<?php echo e(route('portal.q_bank.ans',['id'=>$quiz->id])); ?>" class="btn btn-danger text-light ">Answer Sheet</a>
                                        </p>


                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>
                <!-- END: General Report -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.student_portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nurnobis/quizportal.online/resources/views/std_portal/q_bank/quiz.blade.php ENDPATH**/ ?>