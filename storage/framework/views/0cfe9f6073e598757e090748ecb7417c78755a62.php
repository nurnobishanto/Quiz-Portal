<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.page','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div>
         <?php $__env->slot('header', null, []); ?> 
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Log Files - view
            </h2>
         <?php $__env->endSlot(); ?>
        <div class="w-full inline-block rounded-lg border shadow-xl pt-2">


        <table class="w-full text-left rtl:text-right divide-y table-auto">
            <thead>
            <tr class="bg-gray-50">
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</td>
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Environment</td>
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Level</td>
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Context</td>
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</td>
            </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
            <?php if($logEntries): ?>
                <?php $__currentLoopData = $logEntries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logEntry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="px-2 py-3 whitespace-nowrap">
                            <span class=""><?php echo e($logEntry->date); ?></span>
                        </td>
                        <td class="px-2 py-3 whitespace-nowrap">
                            <?php echo e($logEntry->environment); ?>

                        </td>
                        <td class="px-2 py-3 whitespace-nowrap">
                            <?php if($logEntry->level == 'error'): ?>
                                <span
                                    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-red-100 text-red-800">
                                            <?php echo e(Illuminate\Support\Str::title($logEntry->level)); ?>

                                        </span>
                            <?php elseif($logEntry->level == 'debug'): ?>
                                <span
                                    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                                            <?php echo e(Illuminate\Support\Str::title($logEntry->level)); ?>

                                        </span>
                            <?php else: ?>
                                <span
                                    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                                            <?php echo e(Illuminate\Support\Str::title($logEntry->level)); ?>

                                        </span>
                            <?php endif; ?>
                        </td>
                        <td class="px-2 py-3 whitespace-nowrap truncate max-w-sm">
                            <?php echo e($logEntry->context); ?>

                        </td>
                        <td class="px-2 py-3 whitespace-nowrap">
                            <a href="<?php echo e(Rabol\FilamentLogviewer\Pages\LogViewerViewDetailsPage::getUrl(['recordId' => $logEntry->id,'fileName'=> $filename])); ?>"
                               class="hover:underline focus:outline-none focus:underline text-primary-600 hover:text-primary-500 text-sm font-medium">
                                View details
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            </tbody>

            <?php if($footer): ?>
                <tfoot>
                <tr class="bg-gray-50">
                    <?php echo e($footer); ?>

                </tr>
                </tfoot>
            <?php endif; ?>
        </table>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/nurnobis/quizportal.online/resources/views/vendor/filament-log-viewer/log-viewer-view.blade.php ENDPATH**/ ?>