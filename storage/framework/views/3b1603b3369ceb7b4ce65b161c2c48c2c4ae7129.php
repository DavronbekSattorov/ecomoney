<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $post)): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('edit-post', ['post' => $post])->html();
} elseif ($_instance->childHasBeenRendered('3SZ4ST9')) {
    $componentId = $_instance->getRenderedChildComponentId('3SZ4ST9');
    $componentTag = $_instance->getRenderedChildComponentTagName('3SZ4ST9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3SZ4ST9');
} else {
    $response = \Livewire\Livewire::mount('edit-post', ['post' => $post]);
    $html = $response->html();
    $_instance->logRenderedChild('3SZ4ST9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $post)): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('delete-post', ['post' => $post])->html();
} elseif ($_instance->childHasBeenRendered('RgBtp6k')) {
    $componentId = $_instance->getRenderedChildComponentId('RgBtp6k');
    $componentTag = $_instance->getRenderedChildComponentTagName('RgBtp6k');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('RgBtp6k');
} else {
    $response = \Livewire\Livewire::mount('delete-post', ['post' => $post]);
    $html = $response->html();
    $_instance->logRenderedChild('RgBtp6k', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mark-post-as-spam', ['post' => $post])->html();
} elseif ($_instance->childHasBeenRendered('z0sIpzk')) {
    $componentId = $_instance->getRenderedChildComponentId('z0sIpzk');
    $componentTag = $_instance->getRenderedChildComponentTagName('z0sIpzk');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('z0sIpzk');
} else {
    $response = \Livewire\Livewire::mount('mark-post-as-spam', ['post' => $post]);
    $html = $response->html();
    $_instance->logRenderedChild('z0sIpzk', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mark-post-as-not-spam', ['post' => $post])->html();
} elseif ($_instance->childHasBeenRendered('TijX9Ys')) {
    $componentId = $_instance->getRenderedChildComponentId('TijX9Ys');
    $componentTag = $_instance->getRenderedChildComponentTagName('TijX9Ys');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TijX9Ys');
} else {
    $response = \Livewire\Livewire::mount('mark-post-as-not-spam', ['post' => $post]);
    $html = $response->html();
    $_instance->logRenderedChild('TijX9Ys', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('edit-comment', [])->html();
} elseif ($_instance->childHasBeenRendered('71OU6Dj')) {
    $componentId = $_instance->getRenderedChildComponentId('71OU6Dj');
    $componentTag = $_instance->getRenderedChildComponentTagName('71OU6Dj');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('71OU6Dj');
} else {
    $response = \Livewire\Livewire::mount('edit-comment', []);
    $html = $response->html();
    $_instance->logRenderedChild('71OU6Dj', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('delete-comment', [])->html();
} elseif ($_instance->childHasBeenRendered('9uQhmda')) {
    $componentId = $_instance->getRenderedChildComponentId('9uQhmda');
    $componentTag = $_instance->getRenderedChildComponentTagName('9uQhmda');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9uQhmda');
} else {
    $response = \Livewire\Livewire::mount('delete-comment', []);
    $html = $response->html();
    $_instance->logRenderedChild('9uQhmda', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mark-comment-as-spam', [])->html();
} elseif ($_instance->childHasBeenRendered('9iYUABc')) {
    $componentId = $_instance->getRenderedChildComponentId('9iYUABc');
    $componentTag = $_instance->getRenderedChildComponentTagName('9iYUABc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9iYUABc');
} else {
    $response = \Livewire\Livewire::mount('mark-comment-as-spam', []);
    $html = $response->html();
    $_instance->logRenderedChild('9iYUABc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mark-comment-as-not-spam', [])->html();
} elseif ($_instance->childHasBeenRendered('uJQprn4')) {
    $componentId = $_instance->getRenderedChildComponentId('uJQprn4');
    $componentTag = $_instance->getRenderedChildComponentTagName('uJQprn4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('uJQprn4');
} else {
    $response = \Livewire\Livewire::mount('mark-comment-as-not-spam', []);
    $html = $response->html();
    $_instance->logRenderedChild('uJQprn4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/components/modals-container.blade.php ENDPATH**/ ?>