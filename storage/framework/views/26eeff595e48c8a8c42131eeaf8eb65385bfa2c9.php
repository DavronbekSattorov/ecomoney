<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal-confirm','data' => ['livewireEventToOpenModal' => 'deleteCommentWasSet','eventToCloseModal' => 'commentWasDeleted','modalTitle' => 'Delete Comment','modalDescription' => 'Are you sure you want to delete this comment? This action cannot be undone.','modalConfirmButtonText' => 'Delete','wireClick' => 'deleteComment']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal-confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['livewire-event-to-open-modal' => 'deleteCommentWasSet','event-to-close-modal' => 'commentWasDeleted','modal-title' => 'Delete Comment','modal-description' => 'Are you sure you want to delete this comment? This action cannot be undone.','modal-confirm-button-text' => 'Delete','wire-click' => 'deleteComment']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /Users/kylymbekmazaripov/Documents/projects/and/resources/views/livewire/delete-comment.blade.php ENDPATH**/ ?>