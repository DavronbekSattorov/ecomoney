<a
    href="<?php echo e(route('user.show', $user->username)); ?>"
    class="relative group flex items-center cursor-pointer p-2 w-full  rounded-lg overflow-hidden shadow hover:shadow-md bg-gray-50 dark:bg-gray-700  md:hover:outline md:hover:outline-gray-400 text-sm">
    <img class="w-10 h-10 object-cover rounded-full md:group-hover:ring-2 ring-main-green-light" src="<?php echo e($user->getProfilePhotoUrlAttribute()); ?>">
    <div class="ml-3">
        <p class="font-medium text-gray-800 dark:text-white"><?php echo e($user->name); ?></p>
        <p class="text-xs text-gray-600 dark:text-gray-300"><?php echo e('@'.$user->username); ?></p>
    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.secondary-button','data' => ['type' => 'button','class' => 'ml-auto sm:group-hover:text-main-green-light ']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-secondary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','class' => 'ml-auto sm:group-hover:text-main-green-light ']); ?>
        View user >>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</a>
<?php /**PATH /var/www/html/resources/views/livewire/user-mini-card.blade.php ENDPATH**/ ?>