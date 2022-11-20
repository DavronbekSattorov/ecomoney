<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('title',$user->name); ?>
    <?php $__env->startSection('image',$user->getProfilePhotoUrlAttribute() ); ?>
    <?php $__env->startSection('description',$user->about); ?>

     <?php $__env->slot('desktopCard', null, []); ?> 
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-card', ['user' => $user,'followCount' => $followCount])->html();
} elseif ($_instance->childHasBeenRendered('NNexSz1')) {
    $componentId = $_instance->getRenderedChildComponentId('NNexSz1');
    $componentTag = $_instance->getRenderedChildComponentTagName('NNexSz1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NNexSz1');
} else {
    $response = \Livewire\Livewire::mount('user-card', ['user' => $user,'followCount' => $followCount]);
    $html = $response->html();
    $_instance->logRenderedChild('NNexSz1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
     <?php $__env->endSlot(); ?>
    <?php if(request()->query('followType')): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('follow-index', ['user' => $user,'followCount' => $followCount])->html();
} elseif ($_instance->childHasBeenRendered('ep1oRbf')) {
    $componentId = $_instance->getRenderedChildComponentId('ep1oRbf');
    $componentTag = $_instance->getRenderedChildComponentTagName('ep1oRbf');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ep1oRbf');
} else {
    $response = \Livewire\Livewire::mount('follow-index', ['user' => $user,'followCount' => $followCount]);
    $html = $response->html();
    $_instance->logRenderedChild('ep1oRbf', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php else: ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-index', ['user' => $user,'actionsCount' => $actionsCount])->html();
} elseif ($_instance->childHasBeenRendered('ciDLhGr')) {
    $componentId = $_instance->getRenderedChildComponentId('ciDLhGr');
    $componentTag = $_instance->getRenderedChildComponentTagName('ciDLhGr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ciDLhGr');
} else {
    $response = \Livewire\Livewire::mount('user-index', ['user' => $user,'actionsCount' => $actionsCount]);
    $html = $response->html();
    $_instance->logRenderedChild('ciDLhGr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.notification-success','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notification-success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /Users/kylymbekmazaripov/Sites/ecomoney/resources/views/user/show.blade.php ENDPATH**/ ?>