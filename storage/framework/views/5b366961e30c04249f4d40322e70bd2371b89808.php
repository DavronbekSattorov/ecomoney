<div
    x-cloak
    x-data="{ isOpen: false }"
    x-show="isOpen"
    @keydown.escape.window="isOpen = false"
    @custom-show-edit-modal.window="
        isOpen = true
        $nextTick(() => $refs.title.focus())
    "
    x-init="
        window.livewire.on('postWasUpdated', () => {
            isOpen = false
        })
    "
    class="fixed z-10 inset-0 overflow-y-auto"
    aria-labelledby="modal-title"
    role="dialog"
    aria-modal="true"
>
    <div class="flex items-end justify-center min-h-screen">
        <div
            x-show.transition.opacity="isOpen"
            class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
            aria-hidden="true">
        </div>

        <div
            x-show.transition.origin.bottom.duration.300ms="isOpen"
            class="modal bg-white dark:bg-gray-700  rounded-tl-xl rounded-tr-xl overflow-hidden transform transition-all py-4 md:w-175 sm:w-full"
        >
            <div class="absolute top-0 right-0 pt-4 pr-4">
                <button
                    @click="isOpen = false"
                    class="text-gray-400 hover:text-gray-500"
                >
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="bg-white dark:bg-gray-700 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <h3 class="text-center text-lg font-medium text-gray-900 dark:text-white">Edit Post</h3>
                <p class="text-xs text-center leading-5 text-gray-500 dark:text-gray-200 px-6 mt-4">You have one hour to edit your post from the time you created it.</p>

                <form wire:submit.prevent="updatePost" action="#" method="POST" class="space-y-4 px-4 py-6" novalidate>
                    <div>

                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['wire:model.defer' => 'title','xRef' => 'title','type' => 'text','placeholder' => 'Post Title','class' => 'block mt-1 w-full ']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.defer' => 'title','x-ref' => 'title','type' => 'text','placeholder' => 'Post Title','class' => 'block mt-1 w-full ']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red text-xs mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div>

                    </div>

                    <div class="max-h-[60vh] overflow-scroll">



                        <textarea   id="textarea-post" wire:model.defer="description" data-text="window.livewire.find('<?php echo e($_instance->id); ?>')" cols="30" rows="4" class="hidden w-full bg-gray-100 rounded-xl border-none placeholder-gray-600 text-sm px-4 py-2 ck-content-view" placeholder="Content(optional)" >
                                                <?php echo $post->description; ?>


                        </textarea>
                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red text-xs mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="flex items-center justify-between space-x-3">






                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['type' => 'submit','wire:click' => 'loadCke','id' => 'submit']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','wire:click' => 'loadCke','id' => 'submit']); ?>Update <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                </form>
            </div>

        </div> <!-- end modal -->
    </div>
</div>
<?php /**PATH /Users/kylymbekmazaripov/Documents/projects/and/resources/views/livewire/edit-post.blade.php ENDPATH**/ ?>