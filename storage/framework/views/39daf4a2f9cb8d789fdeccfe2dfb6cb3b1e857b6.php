<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('quick-create-menu')->html();
} elseif ($_instance->childHasBeenRendered('EHKLE8b')) {
    $componentId = $_instance->getRenderedChildComponentId('EHKLE8b');
    $componentTag = $_instance->getRenderedChildComponentTagName('EHKLE8b');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('EHKLE8b');
} else {
    $response = \Livewire\Livewire::mount('quick-create-menu');
    $html = $response->html();
    $_instance->logRenderedChild('EHKLE8b', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?><?php /**PATH E:\defence\storage\framework\views/7d345b12fa93c66383221f18a0174a3ad6ece2f3.blade.php ENDPATH**/ ?>