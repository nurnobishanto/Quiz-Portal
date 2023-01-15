<?php $__env->startSection('content'); ?>
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
            <?php echo e($paper->name); ?>

        </h2>
    </div>
    <?php echo $paper->description; ?>

    <div id="timer" class="grid grid-cols-12 gap-6 mt-5 mb-5">
        <div class="col-span-12 sm:col-span-6 xl:col-span-3">
                <div class="box p-5">
                    <div id="countdownMin" class="text-3xl font-medium leading-8"></div>
                    <div class="text-base text-slate-500 mt-1">Remaining Time</div>
                </div>
        </div>
    </div>
    <div class="col-md-8">
        <h3 style="font-size: 20px;font-weight: bold;text-align: center;">
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
        </h3>
        <form action="<?php echo e(route('checking')); ?>" method="post" name="questionPaper">
            <?php echo csrf_field(); ?>
            <?php
            $count = 1;
            $total = $paper->mcqs->count();
            $timeMin = $paper->duration;
            $timeSec = $timeMin * 60;
            $remtime = $timeSec - $attmDuration;
            $timeMlSec = $remtime * 1000;

            ?>
            <script type="text/javascript">
                var timeleft = <?php echo $remtime; ?>;
                var downloadTimer = setInterval(function() {
                    if (timeleft <= 0) {
                        clearInterval(downloadTimer);
                        document.getElementById("countdown").innerHTML = "Finished";
                    } else {
                        var min = Math.floor(timeleft / 60);
                        var sec = timeleft % 60;
                        document.getElementById("countdownMin").innerHTML = min+" : "+sec;
                    }
                    timeleft -= 1
                }, 1000);
            </script>

            <input type="number" name="paperid" value="<?php echo e($paper->id); ?>" hidden>
            <input type="number" name="pmark" value="<?php echo e($paper->positive_mark); ?>" hidden>
            <input type="number" name="nmark" value="<?php echo e($paper->negative_mark); ?>" hidden>
            <input type="number" name="total" value="<?php echo e($paper->mcqs->count()); ?>" hidden>
            <span class="text-dark">Time : <?php echo e($timeMin); ?> Minutes.</span><br>
            <span class="text-primary">Total Questions : <?php echo e($total); ?> </span><br>
            <span class="text-success">Postive Mark For Every Question : <?php echo e($paper->positive_mark); ?></span><br>
            <span class="text-danger">Negative Mark For Every Question : <?php echo e($paper->negative_mark); ?></span><br>
            <span class="text-success "><strong> Total Mark : <?php echo e($total); ?> X <?php echo e($paper->positive_mark); ?> =
                                <?php echo e($total * $paper->positive_mark); ?> </strong></span><br>
            <?php $i = 1 ?>
            <?php $__currentLoopData = $paper->randommcqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row  border mt-2 p-2">
                    <input type="text" name="q<?php echo e($count); ?>" value="<?php echo e($question->id); ?>" hidden>
                    <input type="text" name="ca<?php echo e($count); ?>" value="<?php echo e($question->ca); ?>" hidden>
                    <?php echo $question->description; ?>

                    <div> <strong><?php echo e($i++); ?> )<?php echo e($question->name); ?> </strong></div>

                    <input hidden value="none" type="text" name="op<?php echo e($count); ?>" checked>

                    <?php if($question->image): ?>
                        <div>
                            <img style="width: 360px;" src="<?php echo e(Voyager::image($question->image)); ?>"
                                 alt="<?php echo e($question->name); ?>">
                        </div>
                    <?php endif; ?>

                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="op<?php echo e($count); ?>"
                                   id="op<?php echo e($count); ?>" value="op1">

                            <label class="form-check-label" for="op<?php echo e($count); ?>">
                                <?php echo e($question->op1); ?>

                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="op<?php echo e($count); ?>"
                                   id="op<?php echo e($count); ?>" value="op2">
                            <label class="form-check-label" for="op<?php echo e($count); ?>">
                                <?php echo e($question->op2); ?>

                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="op<?php echo e($count); ?>"
                                   id="op<?php echo e($count); ?>" value="op3">
                            <label class="form-check-label" for="op<?php echo e($count); ?>">
                                <?php echo e($question->op3); ?>

                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="op<?php echo e($count); ?>"
                                   id="op<?php echo e($count); ?>" value="op4">
                            <label class="form-check-label" for="op<?php echo e($count); ?>">
                                <?php echo e($question->op4); ?>

                            </label>
                        </div>

                    </div>
                </div>
                    <?php $count = $count + 1; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <input class="btn btn-primary m-1" type="submit" value="Submit">


            <script type="text/javascript">
                window.onload = function() {
                    window.setTimeout(function() {
                        document.questionPaper.submit();
                    }, <?php echo $timeMlSec; ?>);
                };
            </script>
        </form>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.student_portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nurnobis/quizportal.online/resources/views/std_portal/run.blade.php ENDPATH**/ ?>