<nav x-data="{ open: false }" class="bg-white border-b border-gray-100  sticky top-0 z-20 dark:bg-gray-700">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-10 sm:h-16 ">
            <div class="flex ">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="<?php echo e(route('post.index')); ?>">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.application-mark','data' => ['class' => 'block h-7 sm:h-9 w-auto']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-application-mark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'block h-7 sm:h-9 w-auto']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </a>
                </div>

            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="sun  cursor-pointer stroke-gray-200" width="28" height="28" viewBox="0 0 24 24" fill="none"  stroke-width="1"  stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="5"/>
                <path d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4"/>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-moon-stars moon stroke-gray-500 cursor-pointer" width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                <path d="M17 4a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" />
                <path d="M19 11h2m-1 -1v2" />
            </svg>


            <!-- Hamburger -->

                <?php if(auth()->guard()->check()): ?>

                    <div class=" space-x-8 sm:-my-px sm:ml-10 sm:flex ">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.nav-link','data' => ['href' => ''.e(route('post.index')).'','class' => 'group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 transition ease-out duration-100 md:dark:hover:text-white rounded-lg p-2']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('post.index')).'','class' => 'group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 transition ease-out duration-100 md:dark:hover:text-white rounded-lg p-2']); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-2 stroke-current dark:stroke-gray-200 md:group-hover:scale-125 transition ease-out duration-100" width="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <rect x="10" y="12" width="4" height="4" />
                            </svg>
                            <span class="ml-2 hidden sm:block">
                                <?php echo e(__('Home')); ?>

                            </span>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>



                    </div>

                    <div class=" space-x-8 sm:-my-px sm:ml-10 sm:flex ">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.nav-link','data' => ['href' => ''.e(route('create-post')).'','class' => 'group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 transition ease-out duration-100 md:dark:hover:text-white rounded-lg p-2']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('create-post')).'','class' => 'group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 transition ease-out duration-100 md:dark:hover:text-white rounded-lg p-2']); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28" zoomAndPan="magnify" viewBox="0 0 150 149.999998"  preserveAspectRatio="xMidYMid meet" version="1.0" class="md:group-hover:scale-125 transition ease-out duration-100">
                                <defs>
                                    <clipPath id="id1">
                                        <path d="M 0 0 L 150 0 L 150 149.25 L 0 149.25 Z M 0 0 " clip-rule="nonzero"/>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#id1)">
                                    <path class="fill-current dark:fill-gray-200" d="M 3.324219 149.875 C 2.867188 149.875 2.414062 149.773438 1.980469 149.542969 C 0.554688 148.800781 -0.00390625 147.042969 0.742188 145.613281 C 3.449219 140.382812 67.992188 17.308594 146.375 0.113281 C 147.3125 -0.0859375 148.25 0.167969 148.949219 0.789062 C 149.640625 1.421875 149.996094 2.351562 149.890625 3.285156 C 149.6875 5.113281 144.675781 48.347656 123.703125 64.035156 C 123.1875 64.429688 122.519531 64.628906 121.890625 64.617188 L 97.671875 63.984375 L 109.8125 73.933594 C 110.445312 74.445312 110.824219 75.199219 110.875 76.011719 C 110.929688 76.824219 110.636719 77.621094 110.074219 78.207031 C 108.335938 80.03125 66.964844 123.023438 27.714844 129.34375 C 26.140625 129.558594 24.632812 128.515625 24.378906 126.921875 C 24.128906 125.332031 25.207031 123.832031 26.792969 123.578125 C 59.167969 118.367188 94.546875 85.371094 103.644531 76.410156 L 87.398438 63.101562 C 86.433594 62.3125 86.082031 61 86.511719 59.828125 C 86.949219 58.667969 88.195312 57.933594 89.316406 57.925781 L 121.003906 58.753906 C 135.820312 46.832031 141.757812 17.695312 143.507812 6.824219 C 69.523438 26.910156 6.546875 147.066406 5.902344 148.300781 C 5.386719 149.296875 4.375 149.875 3.324219 149.875 " fill-opacity="1" fill-rule="nonzero"/>
                                </g>
                            </svg>
                            <span class="ml-2 hidden sm:block">
                                    <?php echo e(__('Create Post')); ?>

                                </span>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    </div>

                <div class=" space-x-8 sm:-my-px sm:ml-10 sm:flex "
                >
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.nav-link','data' => ['class' => 'group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 transition ease-out duration-100 md:dark:hover:text-white rounded-lg p-2']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 transition ease-out duration-100 md:dark:hover:text-white rounded-lg p-2']); ?>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('comment-notifications', [])->html();
} elseif ($_instance->childHasBeenRendered('l1737243095-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1737243095-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1737243095-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1737243095-0');
} else {
    $response = \Livewire\Livewire::mount('comment-notifications', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1737243095-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>





                <?php else: ?>
                <?php endif; ?>
            <div class=" flex sm:items-center sm:ml-6">
            <?php if(auth()->guard()->check()): ?>
                




                <!-- Settings Dropdown -->
                    <div class="ml-3 relative ">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown','data' => ['align' => 'right','width' => '48']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['align' => 'right','width' => '48']); ?>
                             <?php $__env->slot('trigger', null, []); ?> 
                                <?php if(Laravel\Jetstream\Jetstream::managesProfilePhotos()): ?>
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="<?php echo e(Auth::user()->profile_photo_url); ?>" alt="<?php echo e(Auth::user()->name); ?>" />
                                    </button>
                                <?php else: ?>
                                    <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        <?php echo e(Auth::user()->name); ?>


                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                <?php endif; ?>
                             <?php $__env->endSlot(); ?>

                             <?php $__env->slot('content', null, []); ?> 
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    <?php echo e(__('Manage Account')); ?>

                                </div>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('profile.show')).'','class' => 'flex justify-between items-center group']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('profile.show')).'','class' => 'flex justify-between items-center group']); ?>
                                    <span>
                                        <?php echo e(__('Profile')); ?>

                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle stroke-current md:group-hover:scale-125 transition ease-out duration-100" width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <circle cx="12" cy="12" r="9" />
                                        <circle cx="12" cy="10" r="3" />
                                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                    </svg>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>


                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('saved')).'','class' => 'flex justify-between items-center group']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('saved')).'','class' => 'flex justify-between items-center group']); ?>
                                    <span>
                                        <?php echo e(__('Saved Posts')); ?>

                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bookmarks md:group-hover:scale-125 transition ease-out duration-100 stroke-current" width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M13 7a2 2 0 0 1 2 2v12l-5 -3l-5 3v-12a2 2 0 0 1 2 -2h6z" />
                                        <path d="M9.265 4a2 2 0 0 1 1.735 -1h6a2 2 0 0 1 2 2v12l-1 -.6" />
                                    </svg>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if(Laravel\Jetstream\Jetstream::hasApiFeatures()): ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('api-tokens.index')).'']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('api-tokens.index')).'']); ?>
                                        <?php echo e(__('API Tokens')); ?>


                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                <?php endif; ?>

                                <div class="border-t border-gray-100"></div>


                                <!-- Authentication -->
                                <form method="POST" action="<?php echo e(route('logout')); ?>" x-data>
                                    <?php echo csrf_field(); ?>

                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('logout')).'','class' => 'flex justify-between items-center group','@click.prevent' => '$root.submit();']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('logout')).'','class' => 'flex justify-between items-center group','@click.prevent' => '$root.submit();']); ?>
                                        <span>
                                            <?php echo e(__('Log Out')); ?>

                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout md:group-hover:scale-125 transition ease-out duration-100 stroke-current" width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                            <path d="M7 12h14l-3 -3m0 6l3 -3" />
                                        </svg>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </form>
                             <?php $__env->endSlot(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                <?php else: ?>
                    <div class=" space-x-8 sm:-my-px sm:ml-10 flex ">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.nav-link','data' => ['href' => ''.e(route('login')).'']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('login')).'']); ?>

                            <span class="ml-2  block">
                                    <?php echo e(__('Log in')); ?>

                                </span>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    </div>

                    <div class=" space-x-8 sm:-my-px sm:ml-10 flex ">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.nav-link','data' => ['href' => ''.e(route('register')).'']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('register')).'']); ?>

                            <span class="ml-2 block">
                                    <?php echo e(__('Register')); ?>

                                </span>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    </div>





                <?php endif; ?>
            </div>
            </div>


    </div>
</nav>
<?php /**PATH /Users/kylymbekmazaripov/Documents/projects/and/resources/views/navigation-menu.blade.php ENDPATH**/ ?>