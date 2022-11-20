<div
    wire:poll="getNotificationCount"
    x-data="{ isOpen: false }"
    class="relative "
>





    <button @click=
            "isOpen = !isOpen
        if (isOpen) {
            Livewire.emit('getNotifications')
        }
    "
            class="relative flex justify-between items-center  rounded-lg px-1 transition ease-out duration-100 font-medium leading-5"
    >



        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell stroke-current dark:stroke-gray-200 md:group-hover:scale-125 transition ease-out duration-100" width="32" height="32" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
        </svg>


        <?php if($notificationCount): ?>
            <div class="absolute rounded-full bg-red-500 text-white text-xxs w-5 h-5 flex justify-center items-center  -top-1 left-5 "><?php echo e($notificationCount); ?></div>
        <?php endif; ?>
        <span class="ml-2 hidden sm:block">
                                    <?php echo e(__('Notifications')); ?>

                                </span>
    </button>
    <ul
        class="absolute w-76 md:w-96 text-left text-gray-700 dark:text-white text-sm bg-white dark:bg-gray-700 shadow-dialog rounded-xl max-h-128 overflow-y-auto z-10 -right-20 md:-right-12 outline outline-gray-400 top-16"
        x-cloak
        x-show.transition.origin.top="isOpen"
        @click.away="isOpen = false"
        @keydown.escape.window="isOpen = false"
    >
        <?php if($notifications->isNotEmpty() && ! $isLoading): ?>
            <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a
                        href="<?php echo e(route('post.show', $notification->data['post_slug'])); ?>"
                        @click.prevent="
                        isOpen = false
                    "
                        wire:click.prevent="markAsRead('<?php echo e($notification->id); ?>')"
                        class="flex hover:bg-gray-100 dark:hover:bg-gray-600 transition duration-150 ease-in px-5 py-3 dark:text-white"
                    >
                        <img src="<?php echo e($notification->data['user_avatar']); ?>" class="rounded-full w-10 h-10" alt="avatar">
                        <div class="ml-4">
                            <div class="line-clamp-6">
                                <span class="font-semibold"><?php echo e($notification->data['user_name']); ?></span> commented on
                                <span class="font-semibold"><?php echo e($notification->data['post_title']); ?></span>:
                                <span>"<?php echo e($notification->data['comment_body']); ?>"</span>
                            </div>
                            <div class="text-xs text-gray-500 mt-2"><?php echo e($notification->created_at->diffForHumans()); ?></div>
                        </div>
                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <li class="border-t border-gray-300 text-center">
                <button
                    wire:click="markAllAsRead"
                    @click="isOpen = false"
                    class="w-full block font-semibold hover:bg-gray-100 dark:hover:bg-gray-600 transition duration-150 ease-in px-5 py-4"
                >
                    Mark all as read
                </button>
            </li>
        <?php elseif($isLoading): ?>
            <?php $__currentLoopData = range(1,3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="animate-pulse flex items-center transition duration-150 ease-in px-5 py-3">
                    <div class="bg-gray-200 rounded-xl w-10 h-10"></div>
                    <div class="flex-1 ml-4 space-y-2">
                        <div class="bg-gray-200 w-full rounded h-4"></div>


                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <li class="mx-auto w-40 py-6 ">
                <img src="<?php echo e(asset('images/no-data.svg')); ?>" alt="No Posts" class="mx-auto opacity-60 ">
                <div class="text-gray-400 text-center font-bold mt-6">No new notifications</div>
            </li>
        <?php endif; ?>
    </ul>
</div>

<?php /**PATH /Users/kylymbekmazaripov/Sites/ecomoney/resources/views/livewire/comment-notifications.blade.php ENDPATH**/ ?>