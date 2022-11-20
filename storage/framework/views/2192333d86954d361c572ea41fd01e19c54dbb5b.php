<div class="md:w-104 md:block hidden md:mx-1 mt-8 text-base ">
    <!-- Import data card -->
    <div class=" border bg-white dark:bg-gray-800 dark:text-white rounded-lg shadow-sm sticky top-[4.25rem]  md:hover:outline md:hover:outline-gray-400">
        <!-- Card header -->
        <div class="flex items-center justify-between px-4 py-3 border-b ">
            <h5 class="font-semibold mx-auto text-lg">Recommended 🔥</h5>
        </div>
        <ul class="px-4 pb-4 space-y-4 divide-y ">
            <?php $__currentLoopData = $rec_clubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $club): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class=" pt-3  flex  items-center space-x-3">
                <a class="flex items-center shrink-0 group " href="<?php echo e(route('club.show', $club->slug)); ?>">
                    <img src="<?php echo e($club->getProfilePhotoUrlAttribute()); ?>" alt="user avatar" class="mx-auto object-cover rounded-full opacity-80 h-8 w-8 md:group-hover:ring-2 ring-main-green-light  ">
                    <div class="ml-3">
                        <h5  class=" md:group-hover:underline">
                            <?php echo e($club->title); ?>

                        </h5>
                        <h3  class="text-sm text-gray-500 dark:text-gray-300 "><?php echo e($club->members_count); ?> members</h3>
                    </div>
                </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php $__empty_1 = true; $__currentLoopData = $rec_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class=" pt-3  flex  items-center space-x-3">
                        <a class="flex items-center shrink-0 group " href="<?php echo e(route('user.show', $post->user->username)); ?>">
                            <img src="<?php echo e($post->user->getProfilePhotoUrlAttribute()); ?>" alt="user avatar" class="mx-auto object-cover rounded-full opacity-80 w-8 h-8 md:group-hover:ring-2 ring-main-green-light ">
                        </a>
                        <div>
                            <a href="<?php echo e(route('post.show', $post)); ?>" class=" md:hover:underline">
                                <h5 ><?php echo e($post->title); ?></h5>
                            </a>
                            <a href="<?php echo e(route('user.show', $post->user->username)); ?>" class="text-sm text-gray-500 dark:text-gray-300 md:hover:underline "><?php echo e($post->user->name); ?></a>
                        </div>


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
<?php /**PATH /var/www/html/resources/views/livewire/recommended.blade.php ENDPATH**/ ?>