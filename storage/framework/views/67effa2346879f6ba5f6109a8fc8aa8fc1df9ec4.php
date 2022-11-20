<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('desktopCard', null, []); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('recommended', [])->html();
} elseif ($_instance->childHasBeenRendered('BO05KCd')) {
    $componentId = $_instance->getRenderedChildComponentId('BO05KCd');
    $componentTag = $_instance->getRenderedChildComponentTagName('BO05KCd');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BO05KCd');
} else {
    $response = \Livewire\Livewire::mount('recommended', []);
    $html = $response->html();
    $_instance->logRenderedChild('BO05KCd', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
     <?php $__env->endSlot(); ?>


    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('club-index', ['posts' => $posts])->html();
} elseif ($_instance->childHasBeenRendered('NErN0A3')) {
    $componentId = $_instance->getRenderedChildComponentId('NErN0A3');
    $componentTag = $_instance->getRenderedChildComponentTagName('NErN0A3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NErN0A3');
} else {
    $response = \Livewire\Livewire::mount('club-index', ['posts' => $posts]);
    $html = $response->html();
    $_instance->logRenderedChild('NErN0A3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/club/show.blade.php ENDPATH**/ ?>
