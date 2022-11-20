<?php foreach($attributes->onlyProps([
'type' => 'success',
'redirect' => false,
'messageToDisplay' => '',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
'type' => 'success',
'redirect' => false,
'messageToDisplay' => '',
]); ?>
<?php foreach (array_filter(([
'type' => 'success',
'redirect' => false,
'messageToDisplay' => '',
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
    x-data="{isOpen: false,
        isError: <?php if($type === 'success'): ?> false <?php elseif($type === 'error'): ?> true <?php endif; ?>,
        messageToDisplay: '<?php echo e($messageToDisplay); ?>',
        showNotification(message) {
            this.isOpen = true
            this.messageToDisplay = message
            setTimeout(() => {
                this.isOpen = false
            }, 5000)
        }
    }"
    x-init="
        <?php if($redirect): ?>
        $nextTick(() => showNotification(messageToDisplay))
<?php else: ?>
        Livewire.on('postWasUpdated', message => {
            isError = false

        })

        Livewire.on('postWasMarkedAsSpam', message => {
            isError = false
            showNotification(message)
        })

         Livewire.on('postIsSaved', message => {
            isError = false
            showNotification(message)
        })

         Livewire.on('postIsSavedFromSavedList', message => {
            isError = false
            showNotification(message)
        })

        Livewire.on('postWasMarkedAsNotSpam', message => {
            isError = false
            showNotification(message)
        })


        Livewire.on('commentWasAdded', message => {
            isError = false
            showNotification(message)
        })

        Livewire.on('commentWasUpdated', message => {
            isError = false
            showNotification(message)
        })

        Livewire.on('commentWasDeleted', message => {
            isError = false
            showNotification(message)
        })

        Livewire.on('commentWasMarkedAsSpam', message => {
            isError = false
            showNotification(message)
        })

        Livewire.on('commentWasMarkedAsNotSpam', message => {
            isError = false
            showNotification(message)
        })

        Livewire.on('copiedToClipboard', message => {
            isError = false
            showNotification(message)
        })

<?php endif; ?>
        "
    x-show="isOpen"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-x-8"
    x-transition:enter-end="opacity-100 transform translate-x-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 transform translate-x-0"
    x-transition:leave-end="opacity-0 transform translate-x-8"
    @keydown.escape.window="isOpen = false"

    class="z-20 flex justify-between max-w-xs sm:max-w-sm w-full fixed bottom-0 right-0 bg-white dark:bg-gray-700 rounded-xl shadow-lg border px-2 sm:py-5 py-2 mx-2 sm:mx-6 my-8 dark:text-white"
>
    <div class="flex items-center">

        <svg x-show="!isError" class="text-green h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>

        <svg x-show="isError" class="text-red h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>

        <div class="font-semibold text-gray-500 dark:text-white text-xs sm:text-base ml-2" x-text="messageToDisplay"></div>
    </div>
    <button @click="isOpen = false" class="text-gray-400 hover:text-gray-500">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>
<?php /**PATH /Users/kylymbekmazaripov/Sites/ecomoney/resources/views/components/notification-success.blade.php ENDPATH**/ ?>