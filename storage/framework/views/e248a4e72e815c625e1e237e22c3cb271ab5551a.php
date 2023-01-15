<?php $__env->startSection('content'); ?>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-6">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                    <!-- BEGIN: Deposit Transactions -->
                    <div class="col-span-12 md:col-span-6 ">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Deposit Transactions
                            </h2>
                        </div>
                        <div class="mt-5">
                            <?php $__currentLoopData = $deposit_tr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dtr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="intro-x">
                                <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">
                                            <?php if($dtr->method): ?>
                                                <?php echo e($dtr->method->name); ?>

                                            <?php else: ?>
                                                <?php echo e($dtr->note); ?>

                                            <?php endif; ?>

                                        </div>
                                        <div class="text-slate-500 text-xs mt-0.5">TrID : <?php echo e($dtr->trid); ?></div>
                                        <div class="text-slate-500 text-xs mt-0.5"><?php echo e($dtr->created_at->diffForHumans()); ?></div>

                                    </div>
                                    <?php if($dtr->status == 'approved'): ?>
                                        <div class="text-success"><?php echo e($dtr->amount); ?></div>
                                    <?php else: ?>
                                        <div class="text-warning"><?php echo e($dtr->amount); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                    <!-- END: Deposit Transactions -->
                    <!-- BEGIN: Withdraw Transactions -->
                    <div class="col-span-12 md:col-span-6">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Withdraw Transactions
                            </h2>
                        </div>
                        <div class="mt-5">
                            <?php $__currentLoopData = $withdraw_tr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wtr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">
                                                <?php if($wtr->method): ?>
                                                    <?php echo e($wtr->method->name); ?>

                                                <?php else: ?>
                                                    <?php echo e($wtr->note); ?>

                                                <?php endif; ?>

                                            </div>
                                            <div class="text-slate-500 text-xs mt-0.5"><?php echo e($wtr->created_at->diffForHumans()); ?></div>
                                        </div>
                                        <?php if($wtr->status == 'approved'): ?>
                                            <div class="text-danger"><?php echo e(-$wtr->amount); ?></div>
                                        <?php else: ?>
                                            <div class="text-warning"><?php echo e($wtr->amount); ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                    <!-- END: Withdraw Transactions -->
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.student_portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nurnobis/quizportal.online/resources/views/std_portal/transaction.blade.php ENDPATH**/ ?>