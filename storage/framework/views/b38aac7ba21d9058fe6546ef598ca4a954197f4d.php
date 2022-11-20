<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('title','Create post'); ?>
    <?php $__env->startSection('description','Don\'t be shy, share your thoughts '); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('create-post', [])->html();
} elseif ($_instance->childHasBeenRendered('tgfmaC8')) {
    $componentId = $_instance->getRenderedChildComponentId('tgfmaC8');
    $componentTag = $_instance->getRenderedChildComponentTagName('tgfmaC8');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('tgfmaC8');
} else {
    $response = \Livewire\Livewire::mount('create-post', []);
    $html = $response->html();
    $_instance->logRenderedChild('tgfmaC8', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>














 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /Users/kylymbekmazaripov/Sites/ecomoney/resources/views/post/create.blade.php ENDPATH**/ ?>