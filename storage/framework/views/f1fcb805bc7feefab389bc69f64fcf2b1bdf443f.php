
<div
    x-data
    <?php if($showMore == 'true'): ?>
    @click="const clicked = $event.target
            const target = clicked.tagName.toLowerCase()
            const ignores = ['button', 'svg', 'path', 'a','span','ul']

            if (! ignores.includes(target)) {
                clicked.closest('.post-container').querySelector('.post-link').click()
            }
    "
    <?php endif; ?>

    class="post-container    md:hover:outline md:hover:outline-gray-400 transition ease-out duration-100  rounded-lg flex cursor-pointer mt-4 bg-gray-50 dark:bg-gray-700  "
>

    <div class="flex  md:flex-row flex-1  sm:py-1 text-gray-600 dark:text-white text-xs ">
        <div class="w-full flex flex-col justify-between mx-4  ">
            <div class="flex flex-row items-center justify-between sticky top-9 sm:top-16 transition ease-out duration-100   dark:bg-gray-700 bg-gray-50 py-1.5 z-10">
                <div class="flex flex-row items-center ">
                    <a href="#">
                        <img src="<?php echo e($post->user->getProfilePhotoUrlAttribute()); ?>"
                             alt="avatar" class="w-8 h-8 rounded-full">
                    </a>
                    <div class="ml-2  truncate ">
                        <?php echo e($post->user->name); ?>

                    </div>
                    <div class="ml-2 truncate">
                        &bull;
                        <?php echo e($post->created_at->diffForHumans()); ?>

                    </div>

                </div>


                <?php if(auth()->guard()->check()): ?>
                    <div class="relative "
                         x-data="{ isOpen: false }">














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
                            class="outline outline-1 outline-gray-300 absolute w-44 text-left font-semibold bg-white dark:bg-gray-700  rounded-xl  py-3 md:ml-8 top-8 md:top-8 right-0 md:right-0 shadow-md text-gray-600 dark:text-white text-sm z-10"
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
                            <li >
                                <a
                                    href="#"
                                    @click.prevent="
                                                    isOpen = false
                                                    navigator.clipboard.writeText('<?php echo e(route('post.show', $post)); ?>')

                                        "
                                    wire:click.prevent="copied();"
                                    class="  block transition ease-out duration-100 px-3 py-3 flex justify-between items-center group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500"
                                >
                                    <span>
                                        Copy
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard  md:group-hover:scale-125 transition ease-out duration-100 stroke-current " width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                        <rect x="9" y="3" width="6" height="4" rx="2" />
                                    </svg>

                                </a>

                            </li>


                            <li >

                                <?php if($hasSpammedPost): ?>
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
                                        id="mark-as-spam"
                                        href="#"
                                        @click.prevent="
                                                isOpen = false

                                            "
                                        wire:click.prevent="markAsSpam();"
                                        class=" block transition ease-out duration-100 px-3 py-3 flex justify-between items-center group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500"
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
                            <?php if($showMore != 'true'): ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $post)): ?>
                                    <li>
                                        <a
                                            href="#"
                                            @click.prevent="
                                            isOpen = false
                                            $dispatch('custom-show-edit-modal')
                                        "
                                            class=" block transition duration-150 ease-in px-3 py-3 flex justify-between items-center group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500"
                                        >
                                            <span>
                                                Edit Post
                                            </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil md:group-hover:scale-125 transition ease-out duration-100 stroke-current" width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                                                <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                                            </svg>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $post)): ?>
                                    <li>
                                        <a
                                            href="#"
                                            @click.prevent="
                                            isOpen = false
                                            $dispatch('custom-show-delete-modal')
                                        "
                                            class=" block transition duration-150 ease-in px-3 py-3 flex justify-between items-center group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500"
                                        >
                                            <span>Delete Post</span>

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

                                <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                                <?php if($post->spamPosts()->count() > 0): ?>
                                    <li>
                                        <a
                                            href="#"
                                            @click.prevent="
                                                isOpen = false
                                                $dispatch('custom-show-mark-post-as-not-spam-modal')
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
                            <?php endif; ?>

                        </ul>
                    </div>
                <?php endif; ?>
            </div>


            <h4 class="text-gray-600 dark:text-white   text-xl font-semibold mt-1 bg-white dark:bg-gray-800   rounded-t-lg pl-1">
                <a href="<?php echo e(route('post.show', $post)); ?>


                    " class="post-link hover:underline break-all
                    <?php if($showMore == 'true'): ?>
                    line-clamp-3
                    <?php endif; ?>

                    "

                >
                    <?php echo e(ucfirst($post->title)); ?></a>
            </h4>
            <div
                x-data="{ isCollapsed: true} "
                class="bg-white dark:bg-gray-800 dark:text-white"
             >
                <div

                    x-init="
                        if($el.offsetHeight >= $el.scrollHeight){
                                        <?php if($showMore == 'true'): ?>
                                            isCollapsed = false
                                        <?php endif; ?>
                        }"


                    <?php if($showMore == 'true'): ?>

                          :class="{'max-h-[80vh] line-clamp-3' : isCollapsed === true, '' : isCollapsed === false}"
                    <?php endif; ?>



                    class="text-gray-600 dark:text-white   text-base ck-content break-all
                                        <?php if($showMore == 'true'): ?>
                                            ck-content-view
                                            max-h-[80vh] line-clamp-3
                                        <?php endif; ?>
                        pl-1" >

                    <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                    <?php if($post->spamPosts()->count() > 0): ?>
                        <div class="text-red-500 mb-2">Spam Reports: <?php echo e($post->spamPosts()->count()); ?></div>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php echo $post->description; ?>

                </div>

                <?php if($showMore == 'true'): ?>
                    <a
                        x-show="isCollapsed"
                        x-cloak
                        class=" show-btn text-right text-sm text-blue-500 dark:text-blue-200 hover:underline bg-white dark:bg-gray-800 px-1 rounded-b-lg"
                        @click.prevent="isCollapsed = !isCollapsed" x-text="isCollapsed ? 'Show more' : 'Show less'
                        "><?=__('Show more'); ?>
                    </a>
                <?php endif; ?>
            </div>


                <div class="flex items-center font-semibold space-x-2 justify-between sm:mt-2  ">

                    <div  class=" w-1/4 ">
                        <?php if($hasVoted): ?>
                            <button wire:click.prevent="vote" class="  group p-2 flex flex-row items-center rounded-lg transition ease-out duration-100 md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500" >
                                <svg class="fill-main-green-light stroke-main-green-light scale-125 transition ease-out duration-100"
                                    width="25px" height="25px" viewBox="0 0 48 48" fill="" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 24L24 6L43 24H31V42H17V24H5Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="ml-1 md:group-hover:text-gray-800 md:dark:group-hover:text-white" ><?php echo e($votesCount); ?> <span class="hidden sm:inline"> Votes</span> </span>

                            </button>
                        <?php else: ?>
                            <button wire:click.prevent="vote" class=" group p-2 flex flex-row items-center rounded-lg transition ease-out duration-100 md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500">
                                <svg class="stroke-current md:group-hover:scale-125 md:group-hover:fill-main-green-light md:group-hover:stroke-main-green-light transition ease-out duration-100" width="25px" height="25px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                    <path d="M5 24L24 6L43 24H31V42H17V24H5Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="ml-1 md:group-hover:text-gray-800 md:dark:group-hover:text-white" ><?php echo e($votesCount); ?> <span class="  hidden sm:inline"> Votes</span> </span>
                            </button>
                        <?php endif; ?>
                    </div>
                    <div wire:ignore class="w-1/4 flex items-center" >
                        <a href="<?php echo e(route('post.show', $post)); ?>#post-comments" class="group p-2 md:hover:text-gray-800 rounded-lg transition ease-out duration-100 md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 flex items-center md:dark:hover:text-white" >
                            <svg  class="stroke-current md:group-hover:scale-125  transition ease-out duration-100 "
                                  xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" fill="none" viewBox="0 0 24 24"  stroke-width="1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            <div class="ml-1  ">
                                <?php echo e($post->comments_count); ?> <span class="hidden sm:inline"> Comments</span>
                            </div>
                        </a>
                    </div>
                    <div  class="w-1/4 relative "
                          x-data="{ isOpen: false }">



                        <button
                            @click="isOpen = !isOpen"
                            class="group mx-auto p-2 flex items-center justify-center rounded-lg transition ease-out duration-100 md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 md:hover:text-gray-800 md:dark:hover:text-white ">
                            <svg class="stroke-current md:group-hover:scale-125  transition ease-out duration-100 "
                                 xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none"  stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="18" cy="5" r="3"></circle>
                                <circle cx="6" cy="12" r="3"></circle>
                                <circle cx="18" cy="19" r="3"></circle>
                                <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                            </svg>

                            <span class="ml-1  sm:block ">
                                Share
                            </span>
                        </button>

                        <!--MODAL BODY-->
                        <ul class=" w-40 bg-white dark:bg-gray-700 p-2 rounded-lg  flex  justify-around my-4 absolute top-[56px] left-1/2 transform -translate-x-1/2 -translate-y-1/2 outline outline-1 outline-gray-300 z-[19] "
                             x-cloak
                             x-show.transition.origin.top.left="isOpen"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-out duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             @click.away="isOpen = false"
                             @keydown.escape.window="isOpen = false"

                        >

                            <!--TELEGRAM ICON-->
                            <a
                                class="bg-white dark:bg-gray-700 md:dark:hover:bg-[#229ED9] border border-2 md:hover:bg-[#229ED9] w-10 h-10 fill-[#229ED9] hover:fill-white border-sky-200 rounded-full flex items-center justify-center shadow-xl hover:shadow-sky-500/50 cursor-pointer ease-out duration-100"
                                target="_blank"
                                href="https://t.me/share/url?url=<?php echo e(route('post.show', $post)); ?>"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"

                                >
                                    <path
                                        d="m20.665 3.717-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"
                                    ></path>
                                </svg>
                            </a>


                            <!--WHATSAPP ICON-->
                            <a
                                class="bg-white dark:bg-gray-700 md:dark:hover:bg-[#25D366] border border-2  md:hover:bg-[#25D366] w-10 h-10 fill-[#25D366] hover:fill-white border-green-200 rounded-full flex items-center justify-center shadow-xl hover:shadow-green-500/50 cursor-pointer ease-out duration-100"
                                target="_blank"
                                href="https://wa.me/?text=<?php echo e(route('post.show', $post)); ?>"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263"
                                    ></path>
                                </svg>
                            </a>



                            <a
                              class="bg-white  dark:bg-gray-700 md:dark:hover:bg-[#1d9bf0] border border-2  md:hover:bg-[#1d9bf0] w-10 h-10 fill-[#1d9bf0] hover:fill-white border-blue-200 rounded-full flex items-center justify-center shadow-xl hover:shadow-sky-500/50 cursor-pointer ease-out duration-100"
                              target="_blank"
                              href="https://twitter.com/intent/tweet?text=<?php echo e($post->title); ?>&amp;url=<?php echo e(route('post.show', $post)); ?>"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                              >
                                <path
                                  d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"
                                ></path>
                              </svg>
                            </a>

                            </a>

                        </ul>



                    </div>


                    <?php if($hasSaved): ?>
                        <div class=" w-1/5  flex  justify-end">
                            <button wire:click.prevent="save" class="group p-2 flex items-center rounded-lg transition ease-out duration-100 md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 md:hover:text-gray-800 ">
                                <svg class="stroke-red-500 fill-red-500 scale-125 transition ease-out duration-100 md:dark:group-hover:text-white"
                                     xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                                      stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                </svg>
                            </button>
                        </div>
                    <?php else: ?>
                        <div class=" w-1/5  flex items-center justify-end">
                            <button wire:click.prevent="save"  class=" group p-2 flex items-center rounded-lg md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 transition ease-out duration-100 md:dark:hover:text-white">
                                <svg class="stroke-current  md:group-hover:scale-125 md:group-hover:fill-red-500 md:group-hover:stroke-red-500 transition ease-out duration-100 "
                                     xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                                     fill="none"
                                     stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <span class="hidden sm:block md:group-hover:text-gray-600 md:dark:group-hover:text-white"> Save</span>
                            </button>
                        </div>
                    <?php endif; ?>

                </div>
        </div>
    </div>
</div>


<?php /**PATH /Users/kylymbekmazaripov/Documents/projects/and/resources/views/livewire/post-show.blade.php ENDPATH**/ ?>
