<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">






        <title><?php echo e(config('app.name', 'Laravel')); ?></title>


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <?php echo \Livewire\Livewire::styles(); ?>

        <link rel="stylesheet" href="<?php echo e(asset('css/ckeditor.css')); ?>" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">





        <!-- Scripts -->
        <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>


    </head>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.banner','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <div class="min-h-screen bg-gray-200 dark:bg-gray-800">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-menu')->html();
} elseif ($_instance->childHasBeenRendered('iHevTd1')) {
    $componentId = $_instance->getRenderedChildComponentId('iHevTd1');
    $componentTag = $_instance->getRenderedChildComponentTagName('iHevTd1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iHevTd1');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu');
    $html = $response->html();
    $_instance->logRenderedChild('iHevTd1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <!-- Page Heading -->
            <?php if(isset($header)): ?>
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <?php echo e($header); ?>

                    </div>
                </header>
            <?php endif; ?>


        <main class="container mx-auto max-w-custom flex flex-col md:flex-row">
            <?php if(Request::route()->getName() == 'post.index'): ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('recommended', [])->html();
} elseif ($_instance->childHasBeenRendered('jwC7Jb3')) {
    $componentId = $_instance->getRenderedChildComponentId('jwC7Jb3');
    $componentTag = $_instance->getRenderedChildComponentTagName('jwC7Jb3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jwC7Jb3');
} else {
    $response = \Livewire\Livewire::mount('recommended', []);
    $html = $response->html();
    $_instance->logRenderedChild('jwC7Jb3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endif; ?>
            <div class="md:w-175 w-full px-2 md:px-0 mx-auto">
                <div class="mt-8">

                    <?php echo e($slot); ?>

                </div>
            </div>

        </main>
        </div>

            <?php if(session('success_message')): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.notification-success','data' => ['redirect' => true,'messageToDisplay' => ''.e((session('success_message'))).'']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notification-success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['redirect' => true,'message-to-display' => ''.e((session('success_message'))).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if(session('error_message')): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.notification-success','data' => ['type' => 'error','redirect' => true,'messageToDisplay' => ''.e((session('error_message'))).'']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notification-success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'error','redirect' => true,'message-to-display' => ''.e((session('error_message'))).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>

        <?php echo $__env->yieldPushContent('modals'); ?>
    <script src="<?php echo e(asset('/js/theme.js')); ?>"></script>


    <?php echo \Livewire\Livewire::scripts(); ?>



    <?php echo $__env->yieldContent('scripts'); ?>

    </body>
</html>
<?php /**PATH /Users/kylymbekmazaripov/Documents/projects/and/resources/views/layouts/app.blade.php ENDPATH**/ ?>