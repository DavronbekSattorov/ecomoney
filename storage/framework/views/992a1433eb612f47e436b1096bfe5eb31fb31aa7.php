<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal-confirm','data' => ['livewireEventToOpenModal' => 'markAsNotSpamCommentWasSet','eventToCloseModal' => 'commentWasMarkedAsNotSpam','modalTitle' => 'Reset Comment Spam Counter','modalDescription' => 'Are you sure you want to mark this comment as NOT spam? This will reset the spam counter to 0.','modalConfirmButtonText' => 'Reset Spam Counter','wireClick' => 'markAsNotSpam']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal-confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['livewire-event-to-open-modal' => 'markAsNotSpamCommentWasSet','event-to-close-modal' => 'commentWasMarkedAsNotSpam','modal-title' => 'Reset Comment Spam Counter','modal-description' => 'Are you sure you want to mark this comment as NOT spam? This will reset the spam counter to 0.','modal-confirm-button-text' => 'Reset Spam Counter','wire-click' => 'markAsNotSpam']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/livewire/mark-comment-as-not-spam.blade.php ENDPATH**/ ?>