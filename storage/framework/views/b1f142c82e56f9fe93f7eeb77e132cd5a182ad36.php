<div
    id="comment-<?php echo e($comment->id); ?>"
    class="  comment-container relative bg-white dark:bg-gray-700 rounded-xl flex transition duration-500 ease-in mt-4 dark:text-white
    <?php if($comment->user->isAdmin()): ?>
        ring-2 ring-offset-1 ring-green-300
<?php endif; ?>
"
>
    <div class="flex flex-col md:flex-row flex-1 px-4 md:px-0 py-2">
        <div class="w-full md:mx-4">
            <div class="flex items-center justify-between ">
                <div class="flex items-center text-xs  space-x-2 ">
                        <a href="#" class="flex-none" >
                            <img src="<?php echo e($comment->user->getProfilePhotoUrlAttribute()); ?>" alt="avatar" class="w-7 h-7 rounded-full

                                ">
                        </a>

                        <div>&bull;</div>
                    <div ><?php echo e($comment->user->name); ?></div>
                    <div>&bull;</div>
                    <?php if($comment->user->id === $postUserId): ?>
                        <div class="rounded-md text-white bg-blue-400 px-2">OP</div>
                        <div>&bull;</div>
                    <?php endif; ?>
                    <div class="truncate"><?php echo e($comment->created_at->diffForHumans()); ?></div>
                </div>
                <?php if(auth()->guard()->check()): ?>
                    <div
                        class="text-gray-900 flex items-center space-x-2"
                        x-data="{ isOpen: false }"
                    >
                        <div class="relative">
                            
                            
                            
                            
                            
                            
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button-more','data' => ['@click' => 'isOpen = !isOpen']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button-more'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'isOpen = !isOpen']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                            <ul
                                
                                
                                
                                
                                
                                class="outline outline-1 outline-gray-300 absolute w-44 text-left font-semibold bg-white dark:bg-gray-700 rounded-xl  py-3 md:ml-8 top-8 md:top-8 right-0 md:right-0 shadow-md text-gray-600 dark:text-white text-sm z-10"
                                x-cloak
                                x-show.transition.origin.top.left="isOpen"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                            >
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $comment)): ?>
                                    <li>
                                        <a
                                            href="#"
                                            @click.prevent="
                                        isOpen = false
                                        Livewire.emit('setEditComment', <?php echo e($comment->id); ?>)
                                    "
                                            class=" block transition duration-150 ease-in px-3 py-3 flex justify-between items-center group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500"
                                        >
                                            <span>
                                                Edit Comment
                                            </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil md:group-hover:scale-125 transition ease-out duration-100 stroke-current" width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                                                <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                                            </svg>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $comment)): ?>
                                    <li>
                                        <a
                                            href="#"
                                            @click.prevent="
                                        isOpen = false
                                        Livewire.emit('setDeleteComment', <?php echo e($comment->id); ?>)
                                    "
                                            class=" block transition duration-150 ease-in px-3 py-3 flex justify-between items-center group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500"
                                        >
                                            <span>Delete Comment</span>

                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash md:group-hover:scale-125 transition ease-out duration-100 stroke-current" width="28" height="28" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <line x1="4" y1="7" x2="20" y2="7" />
                                                <line x1="10" y1="11" x2="10" y2="17" />
                                                <line x1="14" y1="11" x2="14" y2="17" />
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                            </svg>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <li>

                                    <?php if($comment->commentWasSpammedByUser(auth()->user())): ?>
                                        <a
                                            href="javascript:void(0);"
                                            class="block transition ease-out duration-100 px-3 py-3 text-gray-400 flex justify-between items-center group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500"
                                        >
                                       <span >
                                            Marked as Spam
                                       </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-triangle md:group-hover:scale-125 transition ease-out duration-100 stroke-current " width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M12 9v2m0 4v.01" />
                                                <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
                                            </svg>
                                        </a>
                                    <?php else: ?>
                                        <a
                                            href="#"
                                            @click.prevent="
                                        isOpen = false
                                        Livewire.emit('setMarkAsSpamComment', <?php echo e($comment->id); ?>)
                                    "
                                            class="block transition ease-out duration-100 px-3 py-3 flex justify-between items-center group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500"
                                        >
                                            <span>
                                            Mark as Spam
                                        </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-triangle md:group-hover:scale-125 transition ease-out duration-100 stroke-red-500" width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M12 9v2m0 4v.01" />
                                                <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
                                            </svg>
                                        </a>
                                    <?php endif; ?>
                                </li>

                                <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                                <?php if($comment->spamComments()->count() > 0): ?>
                                    <li>
                                        <a
                                            href="#"
                                            @click.prevent="
                                            isOpen = false
                                            Livewire.emit('setMarkAsNotSpamComment', <?php echo e($comment->id); ?>)
                                        "
                                            class=" block transition duration-150 ease-in px-3 py-3 flex justify-between items-center group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500"
                                        >
                                            <span>Not Spam</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hand-stop md:group-hover:scale-125 transition ease-out duration-100 stroke-current" width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M8 13v-7.5a1.5 1.5 0 0 1 3 0v6.5" />
                                                <path d="M11 5.5v-2a1.5 1.5 0 1 1 3 0v8.5" />
                                                <path d="M14 5.5a1.5 1.5 0 0 1 3 0v6.5" />
                                                <path d="M17 7.5a1.5 1.5 0 0 1 3 0v8.5a6 6 0 0 1 -6 6h-2h.208a6 6 0 0 1 -5.012 -2.7a69.74 69.74 0 0 1 -.196 -.3c-.312 -.479 -1.407 -2.388 -3.286 -5.728a1.5 1.5 0 0 1 .536 -2.022a1.867 1.867 0 0 1 2.28 .28l1.47 1.47" />
                                            </svg>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="text-gray-600 dark:text-white"
                 x-data="{ isCollapsed: true} "
            >
                <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                <?php if($comment->spamComments()->count() > 0): ?>
                    <div class="text-red-500 mb-2">Spam Reports: <?php echo e($comment->spamComments()->count()); ?></div>
                <?php endif; ?>
                <?php endif; ?>


                <div class="mt-3 md:mt-0 break-all ck-content ck-content-view
                                            max-h-[80vh] line-clamp-3"
                     x-init="
                        if($el.offsetHeight >= $el.scrollHeight){
                                isCollapsed = false
                         }"
                     :class="{'max-h-[80vh] line-clamp-3' : isCollapsed === true, '' : isCollapsed === false}"

                >
                    <?php echo $comment->body; ?>

                </div>
                <a
                    x-show="isCollapsed"
                    x-cloak
                    class=" cursor-pointer show-btn text-blue-500 hover:underline  "
                    @click.prevent="isCollapsed = !isCollapsed" x-text="isCollapsed ? 'Show more' : 'Show less'">
                    <?=__('Show more'); ?>
                </a>
            </div>


        </div>
    </div>
</div> <!-- end comment-container -->
<?php /**PATH /Users/kylymbekmazaripov/Documents/projects/and/resources/views/livewire/post-comment.blade.php ENDPATH**/ ?>