
<div class="space-y-6 my-8">
    <div class="flex px-3 justify-between text-lg dark:text-white">

        <div class="w-1/3 truncate ">
            <input wire:model="filter" class="hidden" type="radio" name="posts" id="posts" value="posts" >
            <label for="posts" class="cursor-pointer
                                    sm:hover:text-green-500
                                    <?php if($filter =='posts' || !$filter): ?>
                                            border-b-2
                                            border-gray-500
                                            dark:border-white
                                    <?php endif; ?>
                                    ">Posts <span class=" text-base pl-px "> <?php echo e($actionsCount['postsCount']); ?></span></label>
        </div>
        <div class="w-1/3 truncate  text-center">
            <input wire:model="filter"  class="hidden" type="radio" name="comments" id="comments" value="comments" >
            <label for="comments" class="cursor-pointer
                                    sm:hover:text-green-500
                                    <?php if($filter =='comments'): ?>
                border-b-2
                border-gray-500
                dark:border-white
<?php endif; ?>
                ">Comments<span class=" text-base pl-px"> <?php echo e($actionsCount['commentsCount']); ?></span></label>
        </div>
        <div class="w-1/3 truncate text-right">
            <input wire:model="filter" class="hidden" type="radio" name="upvotes" id="upvotes" value="upvotes" >
            <label for="upvotes" class="cursor-pointer
                                    sm:hover:text-green-500

                                    <?php if($filter =='upvotes'): ?>
                                        border-b-2
                                        dark:border-white
                                        border-gray-500
                                    <?php endif; ?>
                                     ">Upvotes<span class=" text-base pl-px"> <?php echo e($actionsCount['votesCount']); ?></span></label>
        </div>


    </div>


        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post-index', ['post' => $post,'votesCount' => $post->votes_count,'showMore' => 'true'])->html();
} elseif ($_instance->childHasBeenRendered(time().$post->id)) {
    $componentId = $_instance->getRenderedChildComponentId(time().$post->id);
    $componentTag = $_instance->getRenderedChildComponentTagName(time().$post->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(time().$post->id);
} else {
    $response = \Livewire\Livewire::mount('post-index', ['post' => $post,'votesCount' => $post->votes_count,'showMore' => 'true']);
    $html = $response->html();
    $_instance->logRenderedChild(time().$post->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php if($filter =='comments'): ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-comments', ['post' => $post,'userId' => $userId])->html();
} elseif ($_instance->childHasBeenRendered(time().$post->id)) {
    $componentId = $_instance->getRenderedChildComponentId(time().$post->id);
    $componentTag = $_instance->getRenderedChildComponentTagName(time().$post->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(time().$post->id);
} else {
    $response = \Livewire\Livewire::mount('user-comments', ['post' => $post,'userId' => $userId]);
    $html = $response->html();
    $_instance->logRenderedChild(time().$post->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endif; ?>

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
        <?php if($posts->hasMorePages()): ?>
             <?php if (isset($component)) { $__componentOriginal0ae5c46c4505b05fbcf38df9cf69e0378dcc54b6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SpinningCircle::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('spinning-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\SpinningCircle::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ae5c46c4505b05fbcf38df9cf69e0378dcc54b6)): ?>
<?php $component = $__componentOriginal0ae5c46c4505b05fbcf38df9cf69e0378dcc54b6; ?>
<?php unset($__componentOriginal0ae5c46c4505b05fbcf38df9cf69e0378dcc54b6); ?>
<?php endif; ?>
        <div
                x-data="{
                observe(){
                    const observer = new IntersectionObserver((posts)=>{
                        posts.forEach(post => {
                            if(post.isIntersecting){
                                window.livewire.find('<?php echo e($_instance->id); ?>').loadMore()
                            }
                        })
                    })
                    observer.observe(this.$el)
                }
                }"
                x-init="observe"
            >

            </div>

        <?php endif; ?>
    
</div> <!-- end ideas-container -->
<?php /**PATH /var/www/html/resources/views/livewire/user-index.blade.php ENDPATH**/ ?>