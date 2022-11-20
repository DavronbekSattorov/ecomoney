<?php foreach($attributes->onlyProps(['active']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['active']); ?>
<?php foreach (array_filter((['active']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
$classes = ($active ?? false)
            ? 'inline-flex items-center border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition'
            : 'inline-flex  items-center   text-sm font-medium leading-5 text-gray-500  dark:text-white hover:text-gray-700  focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
?>

<a <?php echo e($attributes->merge(['class' => $classes])); ?>

>
    <?php echo e($slot); ?>

</a>
<?php /**PATH /var/www/html/resources/views/vendor/jetstream/components/nav-link.blade.php ENDPATH**/ ?>