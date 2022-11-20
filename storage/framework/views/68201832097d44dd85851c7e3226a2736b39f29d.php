<div class="space-y-3 my-8">
    <a href="<?php echo e(route('user.show',$user->username)); ?>" class="flex items-center w-20 dark:text-white  hover:underline">
        <svg class="w-4 h-4 stroke-current " fill="none"  viewBox="0 0 24 24" >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        <span class="ml-2 ">Back</span>
    </a>
    <div class="sm:flex px-3 justify-start text-lg dark:text-white hidden ">

        <a class="w-1/3 truncate " href="<?php echo e(route('user.show',$user->username).'?followType=followers'); ?>">
            <label for="followType" class="cursor-pointer
                                    sm:hover:text-green-500
                                    <?php if($followType =='followers' || !$followType): ?>
                                            border-b-2
                                            border-gray-500
                                            dark:border-white
                                    <?php endif; ?>
                ">Followers <span class=" text-base pl-px "> <?php echo e($followCount['followersCount']); ?></span></label>
        </a>
        <a class="w-1/3 truncate "href="<?php echo e(route('user.show',$user->username).'?followType=followings'); ?>">
            <label for="comments" class="cursor-pointer
                                    sm:hover:text-green-500
                                    <?php if($followType =='followings'): ?>
                                            border-b-2
                                            border-gray-500
                                            dark:border-white
                                    <?php endif; ?>
                ">Followings<span class=" text-base pl-px"> <?php echo e($followCount['followingsCount']); ?></span></label>
        </a>
    </div>

<?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-mini-card', ['user' => $user])->html();
} elseif ($_instance->childHasBeenRendered(now().$user->id)) {
    $componentId = $_instance->getRenderedChildComponentId(now().$user->id);
    $componentTag = $_instance->getRenderedChildComponentTagName(now().$user->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(now().$user->id);
} else {
    $response = \Livewire\Livewire::mount('user-mini-card', ['user' => $user]);
    $html = $response->html();
    $_instance->logRenderedChild(now().$user->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php $component->withAttributes(['message' => 'No users found...']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda843a42c8c4535499258c9f9196c74606ede189)): ?>
<?php $component = $__componentOriginalda843a42c8c4535499258c9f9196c74606ede189; ?>
<?php unset($__componentOriginalda843a42c8c4535499258c9f9196c74606ede189); ?>
<?php endif; ?>
<?php endif; ?>
    <?php if($users->hasMorePages()): ?>
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
</div>
<?php /**PATH /var/www/html/resources/views/livewire/follow-index.blade.php ENDPATH**/ ?>