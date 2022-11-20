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
} elseif ($_instance->childHasBeenRendered('0aoTPeL')) {
    $componentId = $_instance->getRenderedChildComponentId('0aoTPeL');
    $componentTag = $_instance->getRenderedChildComponentTagName('0aoTPeL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0aoTPeL');
} else {
    $response = \Livewire\Livewire::mount('create-post', []);
    $html = $response->html();
    $_instance->logRenderedChild('0aoTPeL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php $__env->startSection('scripts'); ?>
        <script src="<?php echo e(asset('/js/ckeditor.js')); ?>" ></script>
        <script src="<?php echo e(asset('/js/ckeFuncs.js')); ?>" ></script>
        <script >
            loadCke('#submit','#textarea-post','description',"<?php echo e(route('img_upload', ['_token' => csrf_token() ])); ?>");
            window.addEventListener('loadCke', event => {
                loadCke('#submit','#textarea-post','description',"<?php echo e(route('img_upload', ['_token' => csrf_token() ])); ?>");
            });
        </script>


    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/post/create.blade.php ENDPATH**/ ?>