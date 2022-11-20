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
} elseif ($_instance->childHasBeenRendered('bFacLRP')) {
    $componentId = $_instance->getRenderedChildComponentId('bFacLRP');
    $componentTag = $_instance->getRenderedChildComponentTagName('bFacLRP');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bFacLRP');
} else {
    $response = \Livewire\Livewire::mount('recommended', []);
    $html = $response->html();
    $_instance->logRenderedChild('bFacLRP', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
     <?php $__env->endSlot(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('posts-index', [])->html();
} elseif ($_instance->childHasBeenRendered('IrpXfgL')) {
    $componentId = $_instance->getRenderedChildComponentId('IrpXfgL');
    $componentTag = $_instance->getRenderedChildComponentTagName('IrpXfgL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IrpXfgL');
} else {
    $response = \Livewire\Livewire::mount('posts-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('IrpXfgL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /Users/kylymbekmazaripov/Sites/ecomoney/resources/views/post/index.blade.php ENDPATH**/ ?>