<div class="md:w-104 md:block hidden md:mx-1 mt-8 text-base ">
    <!-- Import data card -->
    <div class=" border bg-white dark:bg-gray-800 dark:text-white rounded-lg shadow-sm sticky top-[4.25rem]  md:hover:outline md:hover:outline-gray-400">
        <!-- Card header -->
        <div class="flex items-center justify-between px-4 py-3 border-b ">
            <h5 class="font-semibold mx-auto text-lg">Recommended 🔥</h5>
        </div>
        <ul class="px-4 pb-4 space-y-4 divide-y ">
            <?php $__currentLoopData = $rec_waste_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $waste_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class=" pt-3  flex  items-center space-x-3">
                <a class="flex items-center shrink-0 group " href="<?php echo e(route('waste_type.show', $waste_type->slug)); ?>">
                    <img src="<?php echo e($waste_type->getProfilePhotoUrlAttribute()); ?>" alt="user avatar" class="mx-auto object-cover rounded-full opacity-80 h-8 w-8 md:group-hover:ring-2 ring-main-green-light  ">
                    <div class="ml-3">
                        <h5  class=" md:group-hover:underline">
                            <?php echo e($waste_type->title); ?>

                        </h5>
                        <h3  class="text-sm text-gray-500 dark:text-gray-300 "><?php echo e($waste_type->members_count); ?> members</h3>
                    </div>
                </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




















        </ul>
    </div>
</div>
<?php /**PATH /Users/kylymbekmazaripov/Sites/ecomoney/resources/views/livewire/recommended.blade.php ENDPATH**/ ?>