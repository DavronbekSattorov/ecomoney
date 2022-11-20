<div>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6 dark:text-white">


        <div class="w-full md:w-1/3">
            <select wire:model="filter" name="other_filters" id="other_filters" class="w-full border-gray-300 dark:bg-gray-700  focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm cursor-pointer ">
                <option value="Newest">Newest</option>
                <option value="Top Voted">Top Voted</option>
                <option value="My Posts">My Posts</option>




            </select>


        </div>
        <div class="w-full md:w-2/3 relative">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['wire:model' => 'search','type' => 'search','placeholder' => 'Search post','class' => 'w-full pl-8 cursor-auto ']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'search','type' => 'search','placeholder' => 'Search post','class' => 'w-full pl-8 cursor-auto ']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <div class="absolute top-0 flex itmes-center h-full ml-2 ">
                <svg class="w-4 text-gray-700 dark:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div> <!-- end filters -->

<div class="space-y-6 my-8">

    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post-index', ['post' => $post,'votesCount' => $post->votes_count,'limitHeight' => 'max-h-[80vh] line-clamp-3','showMore' => 'true'])->html();
} elseif ($_instance->childHasBeenRendered($post->id)) {
    $componentId = $_instance->getRenderedChildComponentId($post->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($post->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($post->id);
} else {
    $response = \Livewire\Livewire::mount('post-index', ['post' => $post,'votesCount' => $post->votes_count,'limitHeight' => 'max-h-[80vh] line-clamp-3','showMore' => 'true']);
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
    <?php if($posts->hasMorePages()): ?>
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
</div>
<?php /**PATH /Users/kylymbekmazaripov/Documents/projects/and/resources/views/livewire/posts-show.blade.php ENDPATH**/ ?>
