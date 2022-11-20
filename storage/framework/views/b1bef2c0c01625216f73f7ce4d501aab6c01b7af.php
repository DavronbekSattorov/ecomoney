
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('title',$post->title); ?>
    <?php $__env->startSection('description',  Str::limit(preg_replace("/<.*?>/", "",$post->description),60)); ?>



    <div>
        <a href="<?php echo e($backUrl); ?>" class="flex items-center w-20 dark:text-white  hover:underline  ">
            <svg class="w-4 h-4 stroke-current " fill="none"  viewBox="0 0 24 24" >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class=" ml-2 ">Back</span>
        </a>
    </div>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post-show', ['post' => $post])->html();
} elseif ($_instance->childHasBeenRendered('K2EsNLu')) {
    $componentId = $_instance->getRenderedChildComponentId('K2EsNLu');
    $componentTag = $_instance->getRenderedChildComponentTagName('K2EsNLu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('K2EsNLu');
} else {
    $response = \Livewire\Livewire::mount('post-show', ['post' => $post]);
    $html = $response->html();
    $_instance->logRenderedChild('K2EsNLu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post-comments', ['post' => $post])->html();
} elseif ($_instance->childHasBeenRendered('z5LgbzA')) {
    $componentId = $_instance->getRenderedChildComponentId('z5LgbzA');
    $componentTag = $_instance->getRenderedChildComponentTagName('z5LgbzA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('z5LgbzA');
} else {
    $response = \Livewire\Livewire::mount('post-comments', ['post' => $post]);
    $html = $response->html();
    $_instance->logRenderedChild('z5LgbzA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

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

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modals-container','data' => ['post' => $post]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modals-container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post)]); ?>
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
<?php /**PATH /Users/kylymbekmazaripov/Sites/ecomoney/resources/views/post/show.blade.php ENDPATH**/ ?>