<div class="space-y-6 my-8">
    <?php if(auth()->guard()->check()): ?>
        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post-index', ['post' => $post,'votesCount' => $post->votes_count,'showMore' => 'true'])->html();
} elseif ($_instance->childHasBeenRendered($post->id)) {
    $componentId = $_instance->getRenderedChildComponentId($post->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($post->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($post->id);
} else {
    $response = \Livewire\Livewire::mount('post-index', ['post' => $post,'votesCount' => $post->votes_count,'showMore' => 'true']);
    $html = $response->html();
    $_instance->logRenderedChild($post->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
           <?php if (isset($component)) { $__componentOriginalda843a42c8c4535499258c9f9196c74606ede189 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\NoPosts::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('no-posts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\NoPosts::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda843a42c8c4535499258c9f9196c74606ede189)): ?>
<?php $component = $__componentOriginalda843a42c8c4535499258c9f9196c74606ede189; ?>
<?php unset($__componentOriginalda843a42c8c4535499258c9f9196c74606ede189); ?>
<?php endif; ?>
        <?php endif; ?>
    <?php else: ?>
        <?php if (isset($component)) { $__componentOriginalbcaf07a316ccf6577fea0cfdf907d5411d22cb07 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\NotAuthorized::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('not-authorized'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\NotAuthorized::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbcaf07a316ccf6577fea0cfdf907d5411d22cb07)): ?>
<?php $component = $__componentOriginalbcaf07a316ccf6577fea0cfdf907d5411d22cb07; ?>
<?php unset($__componentOriginalbcaf07a316ccf6577fea0cfdf907d5411d22cb07); ?>
<?php endif; ?>
    <?php endif; ?>

</div> <!-- end ideas-container -->
<?php /**PATH /var/www/html/resources/views/livewire/upvotes-show.blade.php ENDPATH**/ ?>
