<?php $__env->startSection('content'); ?>
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
            <?php echo e($result->quiz->name); ?>

        </h2>
    </div>
    <?php echo $result->quiz->description; ?>


    <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12 sm:col-span-6 xl:col-span-4">

                    <div class="box p-2">

                        <strong>Name : <?php echo e($result->user->name); ?></strong>
                        <p>Full Mark :<?php echo e($result->quiz->mcqs->count() * $result->quiz->positive_mark); ?></p>
                        <p>
                            <strong> Mark : <?php echo e($result->mark); ?> /
                                                <?php echo e($result->quiz->mcqs->count() * $result->quiz->pmark); ?>

                            </strong>
                        </p>




                        <p>Correct :<?php echo e($result->ca); ?> (<?php echo e(($result->ca * 100) / $result->quiz->mcqs->count()); ?>%)</p>
                        <p>Attempt :<?php echo e($result->ca + $result->wa); ?></p>
                        <p>Avoid : <?php echo e($result->na); ?> (<?php echo e(($result->na * 100) / $result->quiz->mcqs->count()); ?>%)</p>
                        <p>Wrong : <?php echo e($result->wa); ?> (<?php echo e(($result->wa * 100) / $result->quiz->mcqs->count()); ?>%)</p>
                        <div style="font-size: 14px;">Submitted : <?php echo e(date('h:i A d M Y', strtotime($result->created_at))); ?></div>
                        <div style="font-size: 14px;">Duration : <?php echo e(floor($result->time / 60)); ?> Minutes
                                    <?php echo e($result->time % 60); ?> Seconds</div>
					
                        <p>
                            <a class="btn btn-primary mt-1" href="<?php echo e(route('download.card',['id'=>$result->id])); ?>" target="_blank" rel="noopener noreferrer">Download Result Card</a>
                        </p>
                        <p>
                            <a class="btn btn-warning mt-1" href="<?php echo e(route('download.rank',['id'=>$result->quiz->id])); ?>" target="_blank" rel="noopener noreferrer">Download Result Rank</a>
                        </p>
                        <p>
                            <a class="btn btn-primary mt-1" href="<?php echo e(route('download.quiz',['id'=>$result->quiz->id])); ?>" target="_blank" rel="noopener noreferrer">Download Quiz Paper</a>
                        </p>
						<?php if($result->quiz->end < date("Y-m-d h:i:s")) { ?>
						
						
						
                        <p>
                            <a class="btn btn-warning mt-1" href="<?php echo e(route('download.answer',['id'=>$result->quiz->id])); ?>" target="_blank" rel="noopener noreferrer">Download Quiz Answer</a>
                        </p>
                        <p>
                            <a class="btn btn-primary mt-1" href="<?php echo e(route('download.attempt',['id'=>$result->id])); ?>" target="_blank" rel="noopener noreferrer">Download Your Answer sheet</a>
                        </p>
						<?php } ?>
                    </div>

            </div>
            <div <?php if($result->quiz->end > date("Y-m-d h:i:s")): ?> style="display:none;" <?php endif; ?> class="col-span-12 sm:col-span-6 xl:col-span-8">

                <?php
                $count = 1;
                $total = $result->quiz->mcqs->count();
                $timeMin = $result->quiz->duration;
                $timeSec = $timeMin * 60;

                ?>
                <input type="number" name="total" value="<?php echo e($result->quiz->mcqs->count()); ?>" hidden>
                <h3 style="font-size: 20px;text-align: center;">
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
                <span class="text-dark">Time : <?php echo e($timeMin); ?> Minutes.</span><br>
                <span class="text-primary">Total Questions : <?php echo e($total); ?> </span><br>
                <span class="text-success">Postive Mark For Every Question : <?php echo e($result->quiz->positive_mark); ?></span><br>
                <span class="text-danger">Negative Mark For Every Question : <?php echo e($result->quiz->negative_mark); ?></span><br>
                <span class="text-success "><strong> Total Mark : <?php echo e($total); ?> X <?php echo e($result->quiz->positive_mark); ?> =
                            <?php echo e($total * $result->quiz->positive_mark); ?> </strong></span><br>
                <?php $__currentLoopData = $result->attempts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $atmpt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php
                        $correct_ans = $atmpt->mcq->ca ;
                        $my_attempt =  $atmpt->attempt;
                        ?>

                    <div
                            <?php if ($correct_ans === $my_attempt) {
                        echo 'class="row  border p-2 bg-success text-light"';
                    } elseif ($my_attempt === 'none') {
                        echo 'class="row  border p-2 bg-warning text-dark"';
                    } else {
                        echo 'class="row  border p-2 bg-danger text-light"';
                    } ?>

                    >

                        <div><strong><?php echo $count; ?>) <?php echo e($atmpt->mcq->name); ?> </strong></div>


                        <?php echo $atmpt->mcq->description; ?>

                        <?php if($atmpt->mcq->image): ?>
                            <div>
                                <img style="max-height:250px;" src="<?php echo e(asset('storage/'.$atmpt->mcq->image)); ?>"
                                     alt="<?php echo e($atmpt->mcq->name); ?>">
                            </div>
                        <?php endif; ?>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                       id="op<?php echo e($count); ?>"  disabled <?php if ($atmpt->attempt == "op1") {
                                                                           ?> checked <?php
                                                                                      } ?>>
                                <label class="form-check-label" for="op<?php echo e($count); ?>">
                                    <?php echo e($atmpt->mcq->op1); ?>

                                </label>

                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                       id="op<?php echo e($count); ?>"  disabled <?php if ($atmpt->attempt == "op2") {
                                                                           ?> checked <?php
                                                                                      } ?>>
                                <label class="form-check-label" for="op<?php echo e($count); ?>">
                                    <?php echo e($atmpt->mcq->op2); ?>

                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                       id="op<?php echo e($count); ?>"  disabled <?php if ($atmpt->attempt == "op3") {
                                                                           ?> checked <?php
                                                                                      } ?>>
                                <label class="form-check-label" for="op<?php echo e($count); ?>">
                                    <?php echo e($atmpt->mcq->op3); ?>

                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                       id="op<?php echo e($count); ?>"  disabled <?php if ($atmpt->attempt == "op4") {
                                                                           ?> checked <?php
                                                                                      } ?>>
                                <label class="form-check-label" for="op<?php echo e($count); ?>">
                                    <?php echo e($atmpt->mcq->op4); ?>

                                </label>
                            </div>

                        </div>
                        <strong>
                            <?php if($my_attempt =="none"): ?>
                                <span>Your skipped this MCQ</span><br>
                            <?php else: ?>
                                <span>Your Answer: <?php echo e($atmpt->mcq->$my_attempt); ?></span><br>
                            <?php endif; ?>

                            <span>Correct Answer: <?php echo e($atmpt->mcq->$correct_ans); ?></span>
                        </strong>
                        <br>
                        <div>Explain : <?php echo e($atmpt->mcq->explain); ?></div>
                        <?php if($atmpt->mcq->explain_img): ?>
                        <img src="<?php echo e(asset('storage/'.$atmpt->mcq->explain_img)); ?>" style="max-height:250px;">
                        <?php endif; ?>

                    </div>


                        <?php $count = $count + 1; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student_portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nurnobis/quizportal.online/resources/views/std_portal/result.blade.php ENDPATH**/ ?>