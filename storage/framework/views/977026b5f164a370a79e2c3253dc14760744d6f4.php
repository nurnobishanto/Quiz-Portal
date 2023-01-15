<?php $__env->startSection('content'); ?>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Attempt this <?php echo e($quiz->name); ?> Quiz
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div>
                        <?php if(Session::has('success')): ?>
                            <div class="alert-outline-success"> <?php echo e(Session::get('success')); ?></div>
                            <?php
                                Session::forget('success');
                            ?>
                        <?php elseif(Session::has('error')): ?>
                            <div class="alert-outline-danger"> <?php echo e(Session::get('error')); ?></div>
                            <?php
                                Session::forget('error');
                            ?>
                        <?php elseif(Session::has('info')): ?>
                            <div class="alert-outline-secondary"> <?php echo e(Session::get('info')); ?></div>
                            <?php
                                Session::forget('info');
                            ?>
                        <?php elseif(Session::has('warning')): ?>
                            <div class="alert-outline-warning"> <?php echo e(Session::get('warning')); ?></div>
                            <?php
                                Session::forget('warning');
                            ?>


                        <?php endif; ?>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">

                            <div class="col-span-12 sm:col-span-12 xl:col-span-6 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5 text-center">
                                        <div class="text-3xl font-medium leading-8 ">
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
                                            <span>Start Time : <?php echo e(date('D d, M Y H:iA', strtotime($quiz->start))); ?></span><br>
                                            <span>End Time : <?php echo e(date('D d, M Y H:iA', strtotime($quiz->end))); ?></span><br>
                                            <strong>Question Type :</strong>

                                            <?php $__currentLoopData = $quiz->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($i->name); ?>,
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <br>
                                        <?php if($quiz->start< date("Y-m-d h:i:s") && $quiz->end> date("Y-m-d h:i:s") ): ?>
                                            <p>Status: Running</p>
                                            <p class="p-1">
                                            <?php if(strlen($quiz->password)>0): ?>
                                                <form action="<?php echo e(route('pass_check')); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <input required class="" type="password" placeholder="Password" name="pass">
                                                    <input  type="text" hidden name="id" value="<?php echo e($quiz->id); ?>">
                                                    <input type="submit" value="Attempt" class="btn btn-danger text-light">
                                                </form>

                                            <?php else: ?>
                                                <a href="<?php echo e(route('portal.run',['id'=>$quiz->id])); ?>" class="btn btn-danger text-light ">Attempt</a>
                                                <?php endif; ?>
                                                </p>
                                        <?php elseif($quiz->start> date("Y-m-d h:i:s")): ?>
                                            <p>Status: Upcoming</p>
                                        <?php else: ?>
                                            <p> Status: Previous</p>
                                            <p class="p-1">
                                            <?php if(strlen($quiz->password)>0): ?>
                                                <form action="<?php echo e(route('pass_check')); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <input required class="" type="password" placeholder="Password" name="pass">
                                                    <input  type="text" hidden name="id" value="<?php echo e($quiz->id); ?>">
                                                    <input type="submit" value="Attempt" class="btn btn-danger text-light">
                                                </form>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('portal.run',['id'=>$quiz->id])); ?>" class="btn btn-danger text-light ">Attempt</a>
                                                <?php endif; ?>
                                                </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>


                    </div>

                </div>
                <!-- END: General Report -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.student_portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nurnobis/quizportal.online/resources/views/std_portal/start.blade.php ENDPATH**/ ?>