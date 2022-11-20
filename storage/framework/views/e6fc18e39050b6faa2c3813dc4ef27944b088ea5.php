<div
    x-data="{ isOpen: false }"
    x-init="
        Livewire.on('commentWasAdded', () => {
            isOpen = false
        })

        Livewire.hook('message.processed', (message, component) => {
            
        if (['gotoPage', 'previousPage', 'nextPage'].includes(message.updateQueue[0].method)) {
            const firstComment = document.querySelector('.comment-container:first-child')
            firstComment.scrollIntoView({ behavior: 'smooth'})
        }


        if (['commentWasAdded', 'statusWasUpdated'].includes(message.updateQueue[0].payload.event)
         && message.component.fingerprint.name === 'post-comments') {
            const lastComment = document.querySelector('.comment-container:last-child')
            lastComment.scrollIntoView({ behavior: 'smooth'})
            lastComment.classList.add('bg-green-50')
            setTimeout(() => {
                lastComment.classList.remove('bg-green-50')
            }, 5000)
        }
    })

<?php if(session('scrollToComment')): ?>
        const commentToScrollTo = document.querySelector('#comment-<?php echo e(session('scrollToComment')); ?>')
            commentToScrollTo.scrollIntoView({ behavior: 'smooth'})
            commentToScrollTo.classList.add('bg-green-50')
            setTimeout(() => {
                commentToScrollTo.classList.remove('bg-green-50')
            }, 5000)
        <?php endif; ?>
        "
    class="relative"
>












    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['type' => 'button','@click' => '
            isOpen = !isOpen



        ']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','@click' => '
            isOpen = !isOpen



        ']); ?>
    Leave a comment
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <div
        class="absolute z-10 w-80 md:w-104 text-left font-semibold text-sm bg-white dark:bg-gray-700 shadow-dialog rounded-lg mt-2 outline outline-1 outline-gray-300"
        x-cloak
        x-show.transition.origin.top.left="isOpen"
        x-transition:enter.duration.400ms
        @click.away="isOpen = false"
        @keydown.escape.window="isOpen = false"
    >
        <?php if(auth()->guard()->check()): ?>
            <form wire:submit.prevent="addComment" action="#" class="space-y-4 px-4 py-6" novalidate>

                    <textarea x-ref="comment"
                              wire:model="comment"

                              name="post_comment" id="post_comment"  placeholder="Share your thoughts..." class="w-full border-gray-300 dark:bg-gray-700 dark:text-white  focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50  px-4 py-2 rounded-md placeholder-gray-700 dark:placeholder-white"></textarea>

                    <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="flex flex-col md:flex-row items-center md:space-x-3">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['id' => 'comment_submit','type' => 'submit','wire:click' => 'loadCke']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'comment_submit','type' => 'submit','wire:click' => 'loadCke']); ?>
                        Post Comment
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                </div>

            </form>
        <?php else: ?>
            <div class="px-4 py-6">
                <p class="font-normal dark:text-white">Please login or create an account to post a comment.</p>
                <div class="flex items-center space-x-3 mt-8">
                    <a
                        wire:click.prevent="redirectToLogin"
                        href="<?php echo e(route('login')); ?>"
                        class="w-1/2 text-center"
                        
                    >
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.primary-span','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('primary-span'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            Login
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </a>
                    <a
                        wire:click.prevent="redirectToRegister"
                        href="<?php echo e(route('register')); ?>"
                        class="w-1/2 text-center"

                    >
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.secondary-span','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('secondary-span'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            Sign Up
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /Users/kylymbekmazaripov/Sites/ecomoney/resources/views/livewire/add-comment.blade.php ENDPATH**/ ?>