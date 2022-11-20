<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?php echo $__env->yieldContent('image',asset('images/andeska.png')); ?>" />
        <meta property="og:title" content="<?php echo $__env->yieldContent('title','Andeska '); ?>" />
        <meta property="og:url" content="<?php echo $__env->yieldContent('url',request()->url()); ?> "/>
        <meta property="og:description" content="<?php echo $__env->yieldContent('description','Where everyone is connected'); ?>" />
        <title><?php echo $__env->yieldContent('title','Andeska '); ?></title>
        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>
        <!--Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('images/favicon_io/apple-touch-icon.png')); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('images/favicon_io/favicon-32x32.png')); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('images/favicon_io/favicon-16x16.png')); ?>">
        <link rel="icon" type="image/png" href="<?php echo e(asset('images/favicon_io/android-chrome-192x192.png')); ?>" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php echo e(asset('images/favicon_io/android-chrome-512x512.png')); ?>" sizes="512x512">
        <link rel="manifest" href="<?php echo e(asset('images/favicon_io/site.webmanifest')); ?>">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&display=swap">

        <?php echo \Livewire\Livewire::styles(); ?>

        <link rel="stylesheet" href="<?php echo e(asset('css/ckeditor.css')); ?>" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

        <?php echo $__env->yieldContent('header'); ?>

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
    $html = \Livewire\Livewire::mount('navigation-menu', [])->html();
} elseif ($_instance->childHasBeenRendered('68S8TuR')) {
    $componentId = $_instance->getRenderedChildComponentId('68S8TuR');
    $componentTag = $_instance->getRenderedChildComponentTagName('68S8TuR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('68S8TuR');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu', []);
    $html = $response->html();
    $_instance->logRenderedChild('68S8TuR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
            <?php echo e($desktopCard ?? ''); ?>

            <div class="md:w-175 w-full px-2 md:px-0 mx-auto">
                <div class="mt-8 mx-2">

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
<?php /**PATH /Users/kylymbekmazaripov/Sites/ecomoney/resources/views/layouts/app.blade.php ENDPATH**/ ?>