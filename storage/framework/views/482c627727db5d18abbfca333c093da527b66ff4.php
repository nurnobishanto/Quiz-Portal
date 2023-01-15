<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

<?php if(file_exists(public_path($styleFile = 'vendor/artisan-gui/gui.css'))): ?>
    <link rel="stylesheet" href="<?php echo e(asset($styleFile)); ?>">
<?php else: ?>
    <style>
        <?php include $guiRoot . '/stubs/css/gui.css'; ?>
    </style>
<?php endif; ?><?php /**PATH /home/nurnobis/quizportal.online/vendor/3x1io/filament-commands/resources/views/partials/styles.blade.php ENDPATH**/ ?>