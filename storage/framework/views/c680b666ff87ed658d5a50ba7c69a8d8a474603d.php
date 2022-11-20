<div class="md:w-104 block md:mx-1 mt-8 text-base ">
    <!-- Import data card -->
    <div class=" border bg-white dark:bg-gray-800 dark:text-white rounded-lg shadow-sm sticky top-[4.25rem]  ">
        <!-- Card header -->

        <img src="<?php echo e(asset('images/user-card-background.jpeg')); ?>" class="w-full rounded-t-lg" />
        <div class="flex justify-center -mt-8">
            <img src="<?php echo e($user->getProfilePhotoUrlAttribute()); ?>" class="w-28 h-28 object-cover rounded-full border-solid border-white border-2 -mt-3 bg-gray-100">
        </div>

        <div class="text-left px-3 pb-4 pt-2">
            <h3 class="flex justify-between items-center text-gray-700 dark:text-white text-lg bold font-sans font-bold">
                <span><?php echo e($user->name); ?></span>
                <?php if(auth()->user() == $user ): ?>
                    <a href="<?php echo e(route('profile.show')); ?>" class="group md:hover:bg-gray-200/75 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 transition ease-out duration-100 rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil stroke-current dark:stroke-gray-200 md:group-hover:scale-125 transition ease-out duration-100" width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                            <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                        </svg>
                    </a>
                <?php else: ?>
                    <?php if($hasFollowed): ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.secondary-button','data' => ['wire:click.prevent' => 'follow','type' => 'button','class' => 'flex']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-secondary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'follow','type' => 'button','class' => 'flex']); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-x stroke-current mr-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <circle cx="9" cy="7" r="4" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M17 9l4 4m0 -4l-4 4" />
                            </svg>
                            Unfollow
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <?php else: ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['type' => 'button','wire:click.prevent' => 'follow','class' => 'flex']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','wire:click.prevent' => 'follow','class' => 'flex']); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus stroke-current mr-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <circle cx="9" cy="7" r="4" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 11h6m-3 -3v6" />
                            </svg>
                            Follow
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </h3>
            <div class=" text-sm leading-normal mt-0 mb-2 text-gray-600 dark:text-gray-300 font-medium lowercase">
               <span class="block"> <?php echo e('@'. $user->username); ?></span>
            </div>

            <p class="mt-2 font-sans font-light dark:text-white tracking-wider">
                <?php if(auth()->user() == $user && $user->about == null): ?>
                    Write about yourself💡
                <?php else: ?>
                    <?php echo e($user->about); ?>

                <?php endif; ?>

            </p>
            <span class="text-gray-500 text-sm">
                Joined <?php echo e($user->created_at->diffForHumans()); ?>

            </span>
            <div class="flex justify-start text-base dark:text-gray-300">

                <a class="w-1/3 truncate " href="<?php echo e(route('user.show',$user->username).'?followType=followers'); ?>">
                    <label for="followers" class="cursor-pointer
                                        sm:hover:text-green-500
                                        <?php if($followType =='followers'): ?>
                                            border-b-2
                                            border-gray-500
                                            dark:border-white
                                        <?php endif; ?>
                        "><?php echo e($followCount['followersCount']); ?><span class="text-sm  pl-1 ">Followers </span></label>
                </a>
                <a class="w-1/3 truncate " href="<?php echo e(route('user.show',$user->username).'?followType=followings'); ?>">
                    <label for="followings" class="cursor-pointer
                                        sm:hover:text-green-500
                                        <?php if($followType =='followings' ): ?>
                                            border-b-2
                                            border-gray-500
                                            dark:border-white
                                        <?php endif; ?>
                        "> <?php echo e($followCount['followingsCount']); ?><span class=" text-sm pl-1  ">Followings</span></label>
                </a>
            </div>








        </div>


    </div>

</div>
<?php /**PATH /Users/kylymbekmazaripov/Sites/ecomoney/resources/views/livewire/user-card.blade.php ENDPATH**/ ?>