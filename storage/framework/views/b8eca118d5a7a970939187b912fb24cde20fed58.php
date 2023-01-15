<?php $__env->startSection('content'); ?>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                    <!-- BEGIN: Deposit Transactions -->
                    <div class="col-span-12 md:col-span-6 ">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Withdraw Request and Transaction
                            </h2>
                        </div>
                        <div class="mt-5">
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
                          <form action="<?php echo e(route('portal.withdraw_req')); ?>" method="post">
                              <?php echo csrf_field(); ?>
                              <div class="input-form mt-5">
                                  <label for="amount" class="form-label">Amount <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Minimum Amount 50 Taka and Maximum Amount <?php echo e(round($balance)); ?> Taka</span> </</label>
                                  <input min="50" max="<?php echo e($balance); ?>" id="amount" name="amount" type="number" class="form-control" placeholder="Enter Amount" required>
                              </div>
                              <div class="input-form mt-5">
                                  <label for="method" class="form-label">Select Payment Method</label>
                                  <select  id="method" name="method_id" class="form-select"  required>
                                      <option >Select Payment Method</option>
                                      <?php $__currentLoopData = $methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <?php if($method->account_number!="null"): ?>
                                              <option value="<?php echo e($method->id); ?>"><?php echo e($method->name); ?></option>
                                          <?php endif; ?>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                              </div>

                              <div class="input-form mt-5">
                                  <label for="account_number" class="form-label">Your Account Number</label>
                                  <input id="account_number"  name="account_number" type="text" class="form-control" placeholder="Account Number" required>
                              </div>
                              <div class="input-form mt-5">
                                  <label for="note" class="form-label w-full flex flex-col sm:flex-row"> Note  </label>
                                  <textarea id="note" class="form-control" name="note" placeholder="Type your Note" minlength="5" required></textarea>
                              </div>
                              <?php if($balance>49): ?>
                                  <input type="submit" value="Request" class="btn btn-primary mt-5">
                              <?php else: ?>
                                  <h2 class="text-danger">Low Balance , Min withdraw is 50 Taka</h2>
                              <?php endif; ?>




                          </form>
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
                                            <div class="text-success"><?php echo e(-$wtr->amount); ?></div>
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

<?php echo $__env->make('layouts.student_portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nurnobis/quizportal.online/resources/views/std_portal/withdraw.blade.php ENDPATH**/ ?>