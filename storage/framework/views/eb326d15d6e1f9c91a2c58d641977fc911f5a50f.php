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
} elseif ($_instance->childHasBeenRendered('DnH2o3g')) {
    $componentId = $_instance->getRenderedChildComponentId('DnH2o3g');
    $componentTag = $_instance->getRenderedChildComponentTagName('DnH2o3g');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('DnH2o3g');
} else {
    $response = \Livewire\Livewire::mount('user-card', ['user' => $user,'followCount' => $followCount]);
    $html = $response->html();
    $_instance->logRenderedChild('DnH2o3g', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
     <?php $__env->endSlot(); ?>
    <?php if(request()->query('followType')): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('follow-index', ['user' => $user,'followCount' => $followCount])->html();
} elseif ($_instance->childHasBeenRendered('GF8HpGr')) {
    $componentId = $_instance->getRenderedChildComponentId('GF8HpGr');
    $componentTag = $_instance->getRenderedChildComponentTagName('GF8HpGr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('GF8HpGr');
} else {
    $response = \Livewire\Livewire::mount('follow-index', ['user' => $user,'followCount' => $followCount]);
    $html = $response->html();
    $_instance->logRenderedChild('GF8HpGr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php else: ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-index', ['user' => $user,'actionsCount' => $actionsCount])->html();
} elseif ($_instance->childHasBeenRendered('AM9LFdp')) {
    $componentId = $_instance->getRenderedChildComponentId('AM9LFdp');
    $componentTag = $_instance->getRenderedChildComponentTagName('AM9LFdp');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AM9LFdp');
} else {
    $response = \Livewire\Livewire::mount('user-index', ['user' => $user,'actionsCount' => $actionsCount]);
    $html = $response->html();
    $_instance->logRenderedChild('AM9LFdp', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH /var/www/html/resources/views/user/show.blade.php ENDPATH**/ ?>