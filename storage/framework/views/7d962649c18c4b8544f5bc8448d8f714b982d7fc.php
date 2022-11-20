<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('title',$club->title); ?>
    <?php $__env->startSection('image',$club->getProfilePhotoUrlAttribute() ); ?>
    <?php $__env->startSection('description',$club->about); ?>
     <?php $__env->slot('desktopCard', null, []); ?> 
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('club-card', ['club' => $club,'actionsCount' => $actionsCount])->html();
} elseif ($_instance->childHasBeenRendered('g2yNG9P')) {
    $componentId = $_instance->getRenderedChildComponentId('g2yNG9P');
    $componentTag = $_instance->getRenderedChildComponentTagName('g2yNG9P');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('g2yNG9P');
} else {
    $response = \Livewire\Livewire::mount('club-card', ['club' => $club,'actionsCount' => $actionsCount]);
    $html = $response->html();
    $_instance->logRenderedChild('g2yNG9P', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
     <?php $__env->endSlot(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('club-index', ['posts' => $posts,'club' => $club,'actionsCount' => $actionsCount])->html();
} elseif ($_instance->childHasBeenRendered('H3oGx43')) {
    $componentId = $_instance->getRenderedChildComponentId('H3oGx43');
    $componentTag = $_instance->getRenderedChildComponentTagName('H3oGx43');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('H3oGx43');
} else {
    $response = \Livewire\Livewire::mount('club-index', ['posts' => $posts,'club' => $club,'actionsCount' => $actionsCount]);
    $html = $response->html();
    $_instance->logRenderedChild('H3oGx43', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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