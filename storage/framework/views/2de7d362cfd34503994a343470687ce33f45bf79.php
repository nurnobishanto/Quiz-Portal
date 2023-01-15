<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('quick-create-menu')->html();
} elseif ($_instance->childHasBeenRendered('vzd7jZ6')) {
    $componentId = $_instance->getRenderedChildComponentId('vzd7jZ6');
    $componentTag = $_instance->getRenderedChildComponentTagName('vzd7jZ6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vzd7jZ6');
} else {
    $response = \Livewire\Livewire::mount('quick-create-menu');
    $html = $response->html();
    $_instance->logRenderedChild('vzd7jZ6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?><?php /**PATH /home/nurnobis/quizportal.online/storage/framework/views/7d345b12fa93c66383221f18a0174a3ad6ece2f3.blade.php ENDPATH**/ ?>