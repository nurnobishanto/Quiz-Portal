<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.page','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Details
            </h3>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Date
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <?php echo e($entry->date); ?>

                    </dd>
                </div>
                <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Environment
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <?php echo e($entry->environment); ?>

                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Level
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <?php if($entry->level == 'error'): ?>
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-red-100 text-red-800">
                                            <?php echo e(Illuminate\Support\Str::title($entry->level)); ?>

                                        </span>
                        <?php elseif($entry->level == 'debug'): ?>
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                                            <?php echo e(Illuminate\Support\Str::title($entry->level)); ?>

                                        </span>
                        <?php else: ?>
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                                            <?php echo e(Illuminate\Support\Str::title($entry->level)); ?>

                                        </span>
                        <?php endif; ?>
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Context
                    </dt>
                </div>
                <div class="bg-gray-50 px-4 pb-5">
                    <dd>
                        <pre
                            class="whitespace-pre-wrap"><?php echo e($entry->context); ?></pre>
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 pt-5">
                    <dt class="text-sm font-medium text-gray-500">
                        Stack trace
                    </dt>
                </div>
                <div class="bg-gray-50 px-4 py-5 w-full">
                    <dd class="mt-1 text-sm text-gray-900">
                        <?php if($entry->stack_traces && $entry->stack_traces->count()): ?>
                            <?php $__currentLoopData = $entry->stack_traces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div
                                    class="<?php echo e(!$loop->last ? 'border-b': ''); ?> <?php echo e($loop->first ? 'border-t': ''); ?> border-gray-200 py-3">
                                    <div class="grid grid-cols-3 w-full py-0.5 px-1 hover:bg-gray-100 rounded">
                                        <div class="col-span-1 font-bold">Caught at</div>
                                        <div class="col-span-2"><?php echo e($st->caught_at); ?></div>
                                    </div>
                                    <div class="grid grid-cols-3 w-full py-0.5 px-1 hover:bg-gray-100 rounded">
                                        <div class="col-span-1 font-bold">In</div>
                                        <div class="col-span-2"><?php echo e($st->in); ?></div>
                                    </div>
                                    <div class="grid grid-cols-3 w-full py-0.5 px-1 hover:bg-gray-100 rounded">
                                        <div class="col-span-1 font-bold">Line</div>
                                        <div class="col-span-2"><?php echo e($st->line); ?></div>
                                    </div>
                                    <div class="grid grid-cols-3 w-full pt-0.5 px-1 hover:bg-gray-100 rounded">
                                        <div class="col-span-1 font-bold">content</div>
                                        <div class="col-span-2"><?php echo e($st->__toString()); ?></div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </dd>
                </div>
            </dl>
        </div>
    </div>

    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    


    
    
    
    
    
    
    
    
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/nurnobis/quizportal.online/resources/views/vendor/filament-log-viewer/log-viewer-view-details.blade.php ENDPATH**/ ?>