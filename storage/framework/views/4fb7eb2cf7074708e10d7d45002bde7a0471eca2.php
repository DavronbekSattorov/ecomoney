<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal-confirm','data' => ['eventToOpenModal' => 'custom-show-mark-post-as-spam-modal','eventToCloseModal' => 'postWasMarkedAsSpam','modalTitle' => 'Mark Post as Spam','modalDescription' => 'Are you sure you want to mark this post as spam?','modalConfirmButtonText' => 'Mark as Spam','wireClick' => 'markAsSpam']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal-confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['event-to-open-modal' => 'custom-show-mark-post-as-spam-modal','event-to-close-modal' => 'postWasMarkedAsSpam','modal-title' => 'Mark Post as Spam','modal-description' => 'Are you sure you want to mark this post as spam?','modal-confirm-button-text' => 'Mark as Spam','wire-click' => 'markAsSpam']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /Users/kylymbekmazaripov/Documents/projects/and/resources/views/livewire/mark-post-as-spam.blade.php ENDPATH**/ ?>