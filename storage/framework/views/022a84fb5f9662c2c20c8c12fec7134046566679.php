<?php foreach($attributes->onlyProps([
'eventToOpenModal' => null,
'livewireEventToOpenModal' => null,
'eventToCloseModal',
'modalTitle',
'modalDescription',
'modalConfirmButtonText',
'wireClick',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
'eventToOpenModal' => null,
'livewireEventToOpenModal' => null,
'eventToCloseModal',
'modalTitle',
'modalDescription',
'modalConfirmButtonText',
'wireClick',
]); ?>
<?php foreach (array_filter(([
'eventToOpenModal' => null,
'livewireEventToOpenModal' => null,
'eventToCloseModal',
'modalTitle',
'modalDescription',
'modalConfirmButtonText',
'wireClick',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div
    x-cloak
    x-data="{ isOpen: false }"
    x-show="isOpen"
    @keydown.escape.window="isOpen = false"
    <?php if($eventToOpenModal): ?>
    <?php echo e('@'.$eventToOpenModal); ?>.window="
            isOpen = true
            $nextTick(() => $refs.confirmButton.focus())
        "
    <?php endif; ?>

    x-init="
        Livewire.on('<?php echo e($eventToCloseModal); ?>', () => {
            isOpen = false
        })

        <?php if($livewireEventToOpenModal): ?>
        Livewire.on('<?php echo e($livewireEventToOpenModal); ?>', () => {
                isOpen = true
                $nextTick(() => $refs.confirmButton.focus())
            })
        <?php endif; ?>
        "
    class="fixed z-20 inset-0 overflow-y-auto"
    aria-labelledby="modal-title"
    role="dialog"
    aria-modal="true"
>
    <div
        x-show.transition.opacity.duration.300ms="isOpen"
        class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
    >
        <div class="fixed inset-0 bg-gray-500  bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div
            x-show.transition.opacity.duration.300ms="isOpen"
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
        >
            <div class="bg-white dark:bg-gray-700 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <!-- Heroicon name: outline/exclamation -->
                        <svg class="h-6 w-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white" id="modal-title">
                            <?php echo e($modalTitle); ?>

                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500 dark:text-gray-200">
                                <?php echo e($modalDescription); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-100 dark:bg-gray-800 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">



                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['wire:click' => ''.e($wireClick).'','xRef' => 'confirmButton','type' => 'button','class' => 'w-full inline-flex  justify-center sm:ml-3 sm:w-auto ']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => ''.e($wireClick).'','x-ref' => 'confirmButton','type' => 'button','class' => 'w-full inline-flex  justify-center sm:ml-3 sm:w-auto ']); ?>
                    <?php echo e($modalConfirmButtonText); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.secondary-button','data' => ['@click' => 'isOpen = false','type' => 'button','class' => 'w-full inline-flex  justify-center sm:ml-3 sm:w-auto  mt-3 sm:mt-0']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-secondary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'isOpen = false','type' => 'button','class' => 'w-full inline-flex  justify-center sm:ml-3 sm:w-auto  mt-3 sm:mt-0']); ?>
                    Cancel
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>



            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/kylymbekmazaripov/Sites/ecomoney/resources/views/components/modal-confirm.blade.php ENDPATH**/ ?>