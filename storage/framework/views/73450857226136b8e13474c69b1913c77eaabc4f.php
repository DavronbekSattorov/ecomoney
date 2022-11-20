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
    $html = \Livewire\Livewire::mount('club-card', ['club' => $clubs,'actionsCount' => $actionsCount])->html();
} elseif ($_instance->childHasBeenRendered('ZfwH084')) {
    $componentId = $_instance->getRenderedChildComponentId('ZfwH084');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZfwH084');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZfwH084');
} else {
    $response = \Livewire\Livewire::mount('club-card', ['club' => $clubs,'actionsCount' => $actionsCount]);
    $html = $response->html();
    $_instance->logRenderedChild('ZfwH084', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
     <?php $__env->endSlot(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('club-index', ['posts' => $posts,'club' => $club,'actionsCount' => $actionsCount])->html();
} elseif ($_instance->childHasBeenRendered('EtdvU1R')) {
    $componentId = $_instance->getRenderedChildComponentId('EtdvU1R');
    $componentTag = $_instance->getRenderedChildComponentTagName('EtdvU1R');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('EtdvU1R');
} else {
    $response = \Livewire\Livewire::mount('club-index', ['posts' => $posts,'club' => $club,'actionsCount' => $actionsCount]);
    $html = $response->html();
    $_instance->logRenderedChild('EtdvU1R', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
