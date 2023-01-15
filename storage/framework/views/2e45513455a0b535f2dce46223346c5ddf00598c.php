<?php $__env->startSection('content'); ?>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 ">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                           My Attempts
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                </div>
                <div class="col-span-12">


                    <div style="overflow-x:auto;">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Rank SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Mark</th>
                                <th scope="col">Correct</th>
                                <th scope="col">Wrong</th>
                                <th scope="col">Submitted
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $rank = 1;?>
                            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($rank); ?></th>
                                    <td><?php echo e($r->user->name); ?></td>
                                    <td><?php echo e($r->mark); ?></td>
                                    <td><?php echo e($r->ca); ?></td>
                                    <td><?php echo e($r->wa); ?></td>
                                    <td><?php echo e(date('h:i A d M Y', strtotime($r->created_at))); ?></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(route('portal.single_result',['id'=>$r->id])); ?>">Details</a></td>
                                </tr>
                                    <?php $rank ++;?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>




                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student_portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nurnobis/quizportal.online/resources/views/std_portal/attempts.blade.php ENDPATH**/ ?>