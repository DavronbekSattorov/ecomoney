<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?>
        <?php echo e($post->title); ?> | AND Voting
     <?php $__env->endSlot(); ?>
    <div>
        <a href="<?php echo e($backUrl); ?>" class="flex items-center dark:text-white  hover:underline">
            <svg class="w-4 h-4 stroke-current " fill="none"  viewBox="0 0 24 24" >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2 ">Back</span>
        </a>
    </div>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post-show', ['post' => $post,'votesCount' => $votesCount,'spamPostsCount' => $spamPostsCount])->html();
} elseif ($_instance->childHasBeenRendered('z5zRWNa')) {
    $componentId = $_instance->getRenderedChildComponentId('z5zRWNa');
    $componentTag = $_instance->getRenderedChildComponentTagName('z5zRWNa');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('z5zRWNa');
} else {
    $response = \Livewire\Livewire::mount('post-show', ['post' => $post,'votesCount' => $votesCount,'spamPostsCount' => $spamPostsCount]);
    $html = $response->html();
    $_instance->logRenderedChild('z5zRWNa', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post-comments', ['post' => $post])->html();
} elseif ($_instance->childHasBeenRendered('PX7JXiX')) {
    $componentId = $_instance->getRenderedChildComponentId('PX7JXiX');
    $componentTag = $_instance->getRenderedChildComponentTagName('PX7JXiX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('PX7JXiX');
} else {
    $response = \Livewire\Livewire::mount('post-comments', ['post' => $post]);
    $html = $response->html();
    $_instance->logRenderedChild('PX7JXiX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
    <?php $__env->startSection('scripts'); ?>
        <script src="<?php echo e(asset('/ckeditor/build/ckeditor.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/ckeFuncs.js')); ?>"></script>
        <script>
            loadCke('#submit','#textarea-post','description',"<?php echo e(route('img_upload', ['_token' => csrf_token() ])); ?>");
            window.addEventListener('loadCkePostEdit', event => {
                loadCke('#submit','#textarea-post','description',"<?php echo e(route('img_upload', ['_token' => csrf_token() ])); ?>");
            });

            window.addEventListener('loadCkeCommentCreate', event => {
                loadCke('#comment_submit','#post_comment','comment',"<?php echo e(route('img_upload', ['_token' => csrf_token() ])); ?>");
            });
            loadCke('#edit_comment_submit','#post_comment_edit','body',"<?php echo e(route('img_upload', ['_token' => csrf_token() ])); ?>");
            window.addEventListener('loadCkeCommentEdit', event => {
                loadCke('#edit_comment_submit','#post_comment_edit','body',"<?php echo e(route('img_upload', ['_token' => csrf_token() ])); ?>");
            });
        </script>
    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /Users/kylymbekmazaripov/Documents/projects/and/resources/views/post/show.blade.php ENDPATH**/ ?>
