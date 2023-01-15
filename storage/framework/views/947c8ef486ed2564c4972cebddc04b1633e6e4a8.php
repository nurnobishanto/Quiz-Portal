<input wire:model.lazy="form.<?php echo e($item['id']); ?>.value" class="block w-full transition duration-75 rounded-lg shadow-sm focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70 dark:bg-gray-700 dark:text-white dark:focus:border-primary-500 border-gray-300 dark:border-gray-600" type="file">
<?php if($form[$item['id']]['value'] instanceof \Livewire\TemporaryUploadedFile): ?>
    <span class="text-sm font-bold mt-1">Resim Önizleme:</span>
    <img width="300" src="<?php echo e($form[$item['id']]['value']->temporaryUrl()); ?>">
    <?php else: ?>
    <img width="300" class="mt-2" src="<?php echo e(asset('storage/'.$form[$item['id']]['value'])); ?>">

<?php endif; ?>
<?php /**PATH /home/nurnobis/quizportal.online/vendor/ibrahim-bedir/filament-dynamic-settings-page/src/../resources/views/pages/formfields/image.blade.php ENDPATH**/ ?>