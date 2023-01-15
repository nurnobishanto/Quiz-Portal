<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['item', 'statePath', 'nested' => false, 'moveUp' => false, 'moveDown' => false, 'indent' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['item', 'statePath', 'nested' => false, 'moveUp' => false, 'moveDown' => false, 'indent' => false]); ?>
<?php foreach (array_filter((['item', 'statePath', 'nested' => false, 'moveUp' => false, 'moveDown' => false, 'indent' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div
    wire:key="<?php echo e($statePath); ?>"
    class="space-y-2"
>
    <div class="relative group">
        <?php if($nested): ?>
            <span class="absolute -ml-3 text-xs text-gray-300 -translate-y-1/2 top-1/2">
                &ndash;
            </span>
        <?php endif; ?>

        <button
            type="button"
            wire:click="editItem('<?php echo e($statePath); ?>')"
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'appearance-none w-full bg-white rounded-lg border border-gray-300 px-3 py-2 text-left',
                'dark:bg-gray-700 dark:border-gray-600' => config('filament.dark_mode'),
            ]) ?>"
        >
            <?php echo e($item['label']); ?>

        </button>

        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'absolute top-0 right-0 h-6 divide-x rounded-bl-lg rounded-tr-lg border-gray-300 border-b border-l overflow-hidden rtl:border-l-0 rtl:border-r rtl:right-auto rtl:left-0 rtl:rounded-bl-none rtl:rounded-br-lg rtl:rounded-tr-none rtl:rounded-tl-lg hidden opacity-0 group-hover:opacity-100 group-hover:flex transition ease-in-out duration-250',
            'dark:border-gray-600 dark:divide-gray-600' => config('filament.dark_mode'),
        ]) ?>">
            <button
                x-init
                x-tooltip.raw.duration.0="<?php echo e(__('filament-navigation::filament-navigation.items.add-child')); ?>"
                type="button"
                wire:click="addChild('<?php echo e($statePath); ?>')"
                class="p-1"
                title="<?php echo e(__('filament-navigation::filament-navigation.items.add-child')); ?>"
            >
                <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-plus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3 h-3 text-gray-500 hover:text-gray-900']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
            </button>

            <?php if($moveUp): ?>
                <button
                    x-init
                    x-tooltip.raw.duration.0="<?php echo e(__('filament-navigation::filament-navigation.items.move-up')); ?>"
                    type="button"
                    wire:click="moveItemUp('<?php echo e($statePath); ?>')"
                    class="p-1"
                    title="<?php echo e(__('filament-navigation::filament-navigation.items.move-up')); ?>"
                >
                    <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-arrow-up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3 h-3 text-gray-500 hover:text-gray-900']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
                </button>
            <?php endif; ?>

            <?php if($moveDown): ?>
                <button
                    x-init
                    x-tooltip.raw.duration.0="<?php echo e(__('filament-navigation::filament-navigation.items.move-down')); ?>"
                    type="button"
                    wire:click="moveItemDown('<?php echo e($statePath); ?>')"
                    class="p-1"
                    title="<?php echo e(__('filament-navigation::filament-navigation.items.move-up')); ?>"
                >
                    <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-arrow-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3 h-3 text-gray-500 hover:text-gray-900']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
                </button>
            <?php endif; ?>

            <?php if($indent): ?>
                <button
                    x-init
                    x-tooltip.raw.duration.0="<?php echo e(__('filament-navigation::filament-navigation.items.indent')); ?>"
                    type="button"
                    wire:click="indentItem('<?php echo e($statePath); ?>')"
                    class="p-1"
                    title="<?php echo e(__('filament-navigation::filament-navigation.items.indent')); ?>"
                >
                    <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3 h-3 text-gray-500 hover:text-gray-900']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
                </button>
            <?php endif; ?>

            <?php if($nested): ?>
                <button
                    x-init
                    x-tooltip.raw.duration.0="<?php echo e(__('filament-navigation::filament-navigation.items.dedent')); ?>"
                    type="button"
                    wire:click="dedentItem('<?php echo e($statePath); ?>')"
                    class="p-1"
                    title="<?php echo e(__('filament-navigation::filament-navigation.items.dedent')); ?>"
                >
                    <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-arrow-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3 h-3 text-gray-500 hover:text-gray-900']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
                </button>
            <?php endif; ?>

            <button
                x-init
                x-tooltip.raw.duration.0="<?php echo e(__('filament-navigation::filament-navigation.items.remove')); ?>"
                type="button"
                wire:click="removeItem('<?php echo e($statePath); ?>')"
                class="p-1"
                title="<?php echo e(__('filament-navigation::filament-navigation.items.remove')); ?>"
            >
                <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-trash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3 h-3 text-danger-500 hover:text-danger-900']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
            </button>
        </div>
    </div>

    <div class="ml-3 space-y-2">
        <div class="pl-3 border-l border-gray-300"
            wire:key="<?php echo e($statePath); ?>-children">
            <?php $__currentLoopData = $item['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uuid => $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-navigation::components.nav-item','data' => ['statePath' => $statePath . '.children.' . $uuid,'item' => $child,'moveUp' => !$loop->first,'moveDown' => !$loop->last,'indent' => !$loop->first && $loop->count > 1,'nested' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-navigation::nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['statePath' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statePath . '.children.' . $uuid),'item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($child),'moveUp' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!$loop->first),'moveDown' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!$loop->last),'indent' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!$loop->first && $loop->count > 1),'nested' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /home/nurnobis/quizportal.online/vendor/ryangjchandler/filament-navigation/src/../resources/views/components/nav-item.blade.php ENDPATH**/ ?>