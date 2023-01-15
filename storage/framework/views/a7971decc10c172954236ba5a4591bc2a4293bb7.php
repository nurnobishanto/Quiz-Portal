<?php $__env->startSection('content'); ?>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 ">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            General Report
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>

                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="plus-circle" class="report-box__icon text-primary"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"><?php echo e(round($deposit,2)); ?></div>
                                    <div class="text-base text-slate-500 mt-1">Total Deposit</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="minus-circle" class="report-box__icon text-pending"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"><?php echo e(round($withdraw,2)); ?></div>
                                    <div class="text-base text-slate-500 mt-1">Total Withdraw</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="credit-card" class="report-box__icon text-warning"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="Coin"> Taka </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"><?php echo e(round($deposit-$withdraw,2)); ?></div>
                                    <div class="text-base text-slate-500 mt-1">Account Balance</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="user" class="report-box__icon text-success"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"><?php echo e($user_count); ?></div>
                                    <div class="text-base text-slate-500 mt-1">Total user</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="alert-circle" class="report-box__icon text-pending"></i>
                                        <i data-lucide="plus-circle" class="report-box__icon text-primary"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"><?php echo e(round($pending_deposit,2)); ?></div>
                                    <div class="text-base text-slate-500 mt-1">Pending Deposit</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="alert-circle" class="report-box__icon text-pending"></i>
                                        <i data-lucide="minus-circle" class="report-box__icon text-pending"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"><?php echo e(round($reject_deposit,2)); ?></div>
                                    <div class="text-base text-slate-500 mt-1">Reject Deposit</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="x-circle" class="report-box__icon text-danger"></i>
                                        <i data-lucide="minus-circle" class="report-box__icon text-pending"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"><?php echo e(round($pending_withdraw,2)); ?></div>
                                    <div class="text-base text-slate-500 mt-1">Pending Withdraw</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="x-circle" class="report-box__icon text-danger"></i>
                                        <i data-lucide="minus-circle" class="report-box__icon text-pending"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"><?php echo e(round($reject_withdraw,2)); ?></div>
                                    <div class="text-base text-slate-500 mt-1">Reject Withdraw</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="book" class="report-box__icon text-dark"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"><?php echo e(count($subjects)); ?></div>
                                    <div class="text-base text-slate-500 mt-1">Total Subjects</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="tag" class="report-box__icon text-dark"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"><?php echo e(count($quiz_categories)); ?></div>
                                    <div class="text-base text-slate-500 mt-1">Total Quiz Category</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="file" class="report-box__icon text-dark"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"><?php echo e(count($quizzes)); ?></div>
                                    <div class="text-base text-slate-500 mt-1">Total Quiz</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="info" class="report-box__icon text-dark"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"><?php echo e(count($mcqs)); ?></div>
                                    <div class="text-base text-slate-500 mt-1">Total MCQ</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END: General Report -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                    <!-- BEGIN: Deposit Transactions -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3 2xl:mt-8">
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

                            <a href="<?php echo e(route('portal.transaction')); ?>" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                        </div>
                    </div>
                    <!-- END: Deposit Transactions -->
                    <!-- BEGIN: Withdraw Transactions -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3 2xl:mt-8">
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

                            <a href="<?php echo e(route('portal.transaction')); ?>" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                        </div>
                    </div>
                    <!-- END: Withdraw Transactions -->
                    <!-- BEGIN: Recent Activities -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Recent Attempt Quiz
                            </h2>
                        </div>
                        <div class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5">

                            <?php $__currentLoopData = $attempt_quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attempt_quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium"><?php echo e($attempt_quiz->quiz->name); ?></div>
                                        <div class="text-xs text-slate-500 ml-auto"><?php echo e($attempt_quiz->created_at->diffForHumans()); ?></div>
                                    </div>
                                    <div class="text-slate-500">
                                        <div class="mt-1">
                                            <span class="text-dark">Mark : <?php echo e($attempt_quiz->mark); ?></span> |
                                            <span class="text-success">CA : <?php echo e($attempt_quiz->ca); ?></span> |
                                            <span class="text-danger">WA : <?php echo e($attempt_quiz->wa); ?></span> |
                                            <span class="text-warning">NA : <?php echo e($attempt_quiz->na); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <!-- END: Recent Activities -->
                    <!-- BEGIN: Important Notes -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-auto">
                                Important Notice
                            </h2>
                            <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"> <i data-lucide="chevron-left" class="w-4 h-4"></i> </button>
                            <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"> <i data-lucide="chevron-right" class="w-4 h-4"></i> </button>
                        </div>
                        <div class="mt-5 intro-x">
                            <div class="box zoom-in">
                                <div class="tiny-slider" id="important-notes">
                                    <?php $__currentLoopData = $notice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate"><?php echo e($item->title); ?></div>
                                        <div class="text-slate-400 mt-1"><?php echo e($item->created_at->diffForHumans()); ?></div>
                                        <div class="text-slate-500 text-justify mt-1"><?php echo e($item->details); ?></div>
                                        <?php if($item->url): ?>
                                        <div class="font-medium flex mt-5">
                                            <a target="_blank" href="<?php echo e($item->url); ?>" class="btn btn-secondary py-1 px-2">View Notes</a>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Important Notes -->
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.student_portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\defence\resources\views/std_portal/home.blade.php ENDPATH**/ ?>