<div id="post-comments">
<?php if($comments->isNotEmpty()): ?>
        <div class="comments-container relative space-y-6 sm:ml-22 pt-4 my-8 mt-1">
            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post-comment', ['comment' => $comment,'postUserId' => $post->user->id,'simpleComment' => $simpleComment])->html();
} elseif ($_instance->childHasBeenRendered(time().$comment->id)) {
    $componentId = $_instance->getRenderedChildComponentId(time().$comment->id);
    $componentTag = $_instance->getRenderedChildComponentTagName(time().$comment->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(time().$comment->id);
} else {
    $response = \Livewire\Livewire::mount('post-comment', ['comment' => $comment,'postUserId' => $post->user->id,'simpleComment' => $simpleComment]);
    $html = $response->html();
    $_instance->logRenderedChild(time().$comment->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php if($comments->hasPages()): ?>
            <div class="my-8 md:ml-22 ">
                <?php echo e($comments->onEachSide(1)->links()); ?>

            </div>
        <?php endif; ?>

    <?php else: ?>
        <div class="mx-auto w-70 mt-12">
            <img src="<?php echo e(asset('images/no-comments.svg')); ?>" alt="No Posts" class="mx-auto mix-blend-hard-light opacity-60">
            <div class="text-gray-400 text-center font-bold mt-6">No comments yet...</div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/post-comments.blade.php ENDPATH**/ ?>