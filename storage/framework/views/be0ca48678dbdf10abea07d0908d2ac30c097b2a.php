<div class="md:w-104 md:block hidden md:mx-1 mt-8 text-base ">
    <!-- Import data card -->
    <div class=" border bg-white dark:bg-gray-800 dark:text-white rounded-lg shadow-sm sticky top-[4.25rem]  md:hover:outline md:hover:outline-gray-400">
        <!-- Card header -->
        <div class="flex items-center justify-between px-4 py-3 border-b ">
            <h5 class="font-semibold mx-auto text-lg">Recommended</h5>
        </div>
        <ul class="px-4 pb-4 space-y-4 divide-y ">
            <?php $__empty_1 = true; $__currentLoopData = $rec_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class=" pt-3 ">
                    <a href="<?php echo e(route('post.show', $post)); ?>" class=" group flex  items-center space-x-3 ">
                        <div class="flex items-center">
                            <img src="<?php echo e($post->user->getProfilePhotoUrlAttribute()); ?>" alt="user avatar" class="mx-auto rounded-full opacity-80 h-8">
                        </div>
                        <div>
                                <h5 class="md:group-hover:underline"><?php echo e($post->title); ?></h5>
                            <span class="text-sm text-gray-500 dark:text-gray-300 md:hover:no-underline"><?php echo e($post->user->name); ?></span>
                        </div>

                    </a>
                </li>
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
        </ul>
    </div>
</div>
<?php /**PATH /Users/kylymbekmazaripov/Documents/projects/and/resources/views/livewire/recommended.blade.php ENDPATH**/ ?>