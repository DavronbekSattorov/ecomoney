<?php foreach($attributes->onlyProps([
'message' => 'No Posts were found...',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
'message' => 'No Posts were found...',
]); ?>
<?php foreach (array_filter(([
'message' => 'No Posts were found...',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="mx-auto  sm:w-70 w-40 mt-12">
    <img src="
    <?php echo e(asset('images/no-data.svg')); ?>

        " alt="No Posts" class="mx-auto opacity-60">
    <div class="text-gray-400 text-center font-bold mt-6"><?php echo e($message); ?></div>
</div>

<?php /**PATH /Users/kylymbekmazaripov/Sites/ecomoney/resources/views/components/no-posts.blade.php ENDPATH**/ ?>