 <?php $__env->slot('desktopCard', null, []); ?> 
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-card', ['user' => $user])->html();
} elseif ($_instance->childHasBeenRendered('l4144965531-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l4144965531-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4144965531-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4144965531-0');
} else {
    $response = \Livewire\Livewire::mount('user-card', ['user' => $user]);
    $html = $response->html();
    $_instance->logRenderedChild('l4144965531-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 <?php $__env->endSlot(); ?>
<?php if($followType): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('follow-index', ['user' => $user])->html();
} elseif ($_instance->childHasBeenRendered('l4144965531-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l4144965531-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4144965531-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4144965531-1');
} else {
    $response = \Livewire\Livewire::mount('follow-index', ['user' => $user]);
    $html = $response->html();
    $_instance->logRenderedChild('l4144965531-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php else: ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-index', ['user' => $user,'actionsCount' => $actionsCount])->html();
} elseif ($_instance->childHasBeenRendered('l4144965531-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l4144965531-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4144965531-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4144965531-2');
} else {
    $response = \Livewire\Livewire::mount('user-index', ['user' => $user,'actionsCount' => $actionsCount]);
    $html = $response->html();
    $_instance->logRenderedChild('l4144965531-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/livewire/user-show.blade.php ENDPATH**/ ?>