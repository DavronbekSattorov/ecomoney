<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal-confirm','data' => ['eventToOpenModal' => 'custom-show-delete-modal','eventToCloseModal' => 'postWasDeleted','modalTitle' => 'Delete Post','modalDescription' => 'Are you sure you want to delete this post? This action cannot be undone.','modalConfirmButtonText' => 'Delete','wireClick' => 'deletePost']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal-confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['event-to-open-modal' => 'custom-show-delete-modal','event-to-close-modal' => 'postWasDeleted','modal-title' => 'Delete Post','modal-description' => 'Are you sure you want to delete this post? This action cannot be undone.','modal-confirm-button-text' => 'Delete','wire-click' => 'deletePost']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /Users/kylymbekmazaripov/Documents/projects/and/resources/views/livewire/delete-post.blade.php ENDPATH**/ ?>