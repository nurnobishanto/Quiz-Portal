<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.page','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <style>
        .select2 .select2-container {
            width: 100% !important;
        }

        .select2-selection {
            background-color: #fff !important;
            border: 1px solid #aaaaaab3 !important;
            border-radius: 0.5rem !important;
            padding: 20px !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }

        .select2-selection__arrow {
            height: 100% !important;
        }

        .has-error .select2-selection {
            border-color: rgb(244 63 94 / var(--tw-border-opacity)) !important;
        }
    </style>
    <div class="grid md:grid-cols-4 grid-cols-1 w-full gap-3">
        <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <button wire:key="<?php echo e($key); ?>" wire:click="selectedTab('<?php echo e($group); ?>')"
                class="<?php if($activeTab === $group): ?> bg-gray-200 dark:bg-gray-700 border-gray-700 <?php endif; ?> flex bg-white hover:bg-gray-100 dark:bg-gray-800 border my-2 items-center focus:outline-none">
                <div
                    class="flex items-center justify-center w-5 h-14 ml-4 <?php if($activeTab === $group): ?> !bg-white dark:bg-transparent <?php endif; ?> bg-transparent font-semibold text-black">
                    <?php echo e(++$key); ?></div>
                <div class="flex items-center h-full pl-4">
                    <span class="text-base font-semibold"><?php echo e($group); ?></span>
                </div>
            </button>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php $__currentLoopData = $settingGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($activeTab === $group): ?>
            <div wire:key="<?php echo e($group); ?>"
                class="filament-forms-card-component p-6 bg-white rounded-xl border border-gray-300 dark:border-gray-600 dark:bg-gray-800">
                <h2 class="text-xl mb-5 font-bold"><?php echo e($group); ?></h2>
                <div id="sortable">
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div wire:key="<?php echo e($group . $key); ?>" data-id="<?php echo e($item['id']); ?>"
                            class="flex flex-col mb-5 list-setting mt-5">
                            <label
                                class="text-sm font-medium leading-4 text-gray-700 dark:text-gray-300 mb-2 flex justify-between items-center">
                                <div class="flex items-center">
                                    <?php echo e($item['display_name']); ?>

                                    <span class="handle">
                                        <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-selector'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 cursor-move']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
                                    </span>
                                </div>
                                <?php if(config('filament-dynamic-settings-page.tool.enable')): ?>
                                <button wire:loading.attr="disabled" wire:loading.class="!bg-primary-200"
                                    wire:target="destroySetting">
                                    <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-trash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onclick' => 'return confirm(\'Kaydı silmek istediğinize emin misiniz?\') ? @this.destroySetting('.e($item['id']).') : false','class' => 'w-5 h-5 hover:text-danger-500 cursor-pointer']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
                                </button>
                                <?php endif; ?>
                            </label>
                            <?php if ($__env->exists('filament-dynamic-settings-page::pages.formfields.' . $item['type'], [
                                'wireModel' => 'wire:model.lazy=form.' . $item['id'] . '.value',
                                'photo' => $item['type'] == 'image' ? $form[$item['id']]['value'] : '',
                            ])) echo $__env->make('filament-dynamic-settings-page::pages.formfields.' . $item['type'], [
                                'wireModel' => 'wire:model.lazy=form.' . $item['id'] . '.value',
                                'photo' => $item['type'] == 'image' ? $form[$item['id']]['value'] : '',
                            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <button wire:loading.attr="disabled" wire:loading.class="!bg-primary-200" wire:target="save"
                    wire:click="save" class="<?php echo e($buttonClass); ?> mt-5">
                    <?php echo e(__('filament-dynamic-settings-page::settings-resource.save.button')); ?>

                </button>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if(config('filament-dynamic-settings-page.tool.enable')): ?>
    <div
        class="filament-forms-card-component p-6 bg-white rounded-xl border border-gray-300 dark:border-gray-600 dark:bg-gray-800">
        <h2 class="text-xl mb-5 font-bold">
            <?php echo e(__('filament-dynamic-settings-page::settings-resource.fields.card-header')); ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-2">
            <input wire:model.lazy="newSetting.display_name" type="text"
                placeholder="<?php echo e(__('filament-dynamic-settings-page::settings-resource.fields.name')); ?>"
                class="<?php echo e($inputClass); ?> <?php $__errorArgs = ['newSetting.display_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> !border-danger-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <input wire:model.lazy="newSetting.key" type="text"
                placeholder="<?php echo e(__('filament-dynamic-settings-page::settings-resource.fields.key')); ?>"
                class="<?php echo e($inputClass); ?> <?php $__errorArgs = ['newSetting.key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> !border-danger-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <select wire:model.lazy="newSetting.type"
                class="<?php echo e($inputClass); ?> <?php $__errorArgs = ['newSetting.type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> !border-danger-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <option value="">
                    <?php echo e(__('filament-dynamic-settings-page::settings-resource.fields.types.default')); ?></option>
                <option value="text"><?php echo e(__('filament-dynamic-settings-page::settings-resource.fields.types.text')); ?>

                </option>
                <option value="text_area">
                    <?php echo e(__('filament-dynamic-settings-page::settings-resource.fields.types.text_area')); ?></option>
                <option value="image"><?php echo e(__('filament-dynamic-settings-page::settings-resource.fields.types.image')); ?>

                </option>
            </select>
            <div <?php $__errorArgs = ['newSetting.group'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class="has-error" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
                <select wire:model.lazy="newSetting.group" id="multiple" class="<?php echo e($inputClass); ?>">
                    <option value="" selected="selected">
                        <?php echo e($newSetting['group'] ?? __('filament-dynamic-settings-page::settings-resource.fields.group')); ?>

                    </option>
                    <?php if($tabs): ?>
                        <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($item); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </select>
            </div>
        </div>
        <div align="right">
            <button wire:loading.attr="disabled" wire:loading.class="!bg-primary-200" wire:target="saveNewSetting"
                wire:click="saveNewSetting" class="mt-2 <?php echo e($buttonClass); ?>">
                <?php echo e(__('filament-dynamic-settings-page::settings-resource.add.button')); ?>

            </button>
        </div>
    </div>
    <?php endif; ?>
    <script>
        function initSelect2() {
            $("#multiple").select2({
                tags: true
            })
        }

        function setSortable() {
            $("#sortable").sortable({
                placeholder: "ui-state-highlight",
                handle: ".handle",
                stop: function(e, ui) {
                    let order = {};
                    $('.list-setting').each(function(ind, el) {
                        order[$(this).data('id')] = $(this).index();
                    });
                    window.livewire.find('<?php echo e($_instance->id); ?>').order(order);
                }
            });
        }
        document.addEventListener("DOMContentLoaded", () => {
            initSelect2()

            $("#multiple").on("change", function(e) {
                window.livewire.find('<?php echo e($_instance->id); ?>').changeGroup(e.target.value)
            });

            setSortable();

            Livewire.hook('message.processed', (message, component) => {
                setSortable();
                initSelect2()
            })
        });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/nurnobis/quizportal.online/vendor/ibrahim-bedir/filament-dynamic-settings-page/src/../resources/views/pages/setting.blade.php ENDPATH**/ ?>