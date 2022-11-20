<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $post)): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('edit-post', ['post' => $post])->html();
} elseif ($_instance->childHasBeenRendered('x7Bbx6C')) {
    $componentId = $_instance->getRenderedChildComponentId('x7Bbx6C');
    $componentTag = $_instance->getRenderedChildComponentTagName('x7Bbx6C');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('x7Bbx6C');
} else {
    $response = \Livewire\Livewire::mount('edit-post', ['post' => $post]);
    $html = $response->html();
    $_instance->logRenderedChild('x7Bbx6C', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $post)): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('delete-post', ['post' => $post])->html();
} elseif ($_instance->childHasBeenRendered('7q28AXk')) {
    $componentId = $_instance->getRenderedChildComponentId('7q28AXk');
    $componentTag = $_instance->getRenderedChildComponentTagName('7q28AXk');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7q28AXk');
} else {
    $response = \Livewire\Livewire::mount('delete-post', ['post' => $post]);
    $html = $response->html();
    $_instance->logRenderedChild('7q28AXk', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mark-post-as-spam', ['post' => $post])->html();
} elseif ($_instance->childHasBeenRendered('IUF06NA')) {
    $componentId = $_instance->getRenderedChildComponentId('IUF06NA');
    $componentTag = $_instance->getRenderedChildComponentTagName('IUF06NA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IUF06NA');
} else {
    $response = \Livewire\Livewire::mount('mark-post-as-spam', ['post' => $post]);
    $html = $response->html();
    $_instance->logRenderedChild('IUF06NA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mark-post-as-not-spam', ['post' => $post])->html();
} elseif ($_instance->childHasBeenRendered('H3k09Oo')) {
    $componentId = $_instance->getRenderedChildComponentId('H3k09Oo');
    $componentTag = $_instance->getRenderedChildComponentTagName('H3k09Oo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('H3k09Oo');
} else {
    $response = \Livewire\Livewire::mount('mark-post-as-not-spam', ['post' => $post]);
    $html = $response->html();
    $_instance->logRenderedChild('H3k09Oo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('edit-comment', [])->html();
} elseif ($_instance->childHasBeenRendered('ibfiKWl')) {
    $componentId = $_instance->getRenderedChildComponentId('ibfiKWl');
    $componentTag = $_instance->getRenderedChildComponentTagName('ibfiKWl');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ibfiKWl');
} else {
    $response = \Livewire\Livewire::mount('edit-comment', []);
    $html = $response->html();
    $_instance->logRenderedChild('ibfiKWl', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('delete-comment', [])->html();
} elseif ($_instance->childHasBeenRendered('zJVxJ2Y')) {
    $componentId = $_instance->getRenderedChildComponentId('zJVxJ2Y');
    $componentTag = $_instance->getRenderedChildComponentTagName('zJVxJ2Y');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zJVxJ2Y');
} else {
    $response = \Livewire\Livewire::mount('delete-comment', []);
    $html = $response->html();
    $_instance->logRenderedChild('zJVxJ2Y', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mark-comment-as-spam', [])->html();
} elseif ($_instance->childHasBeenRendered('49g1c2A')) {
    $componentId = $_instance->getRenderedChildComponentId('49g1c2A');
    $componentTag = $_instance->getRenderedChildComponentTagName('49g1c2A');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('49g1c2A');
} else {
    $response = \Livewire\Livewire::mount('mark-comment-as-spam', []);
    $html = $response->html();
    $_instance->logRenderedChild('49g1c2A', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mark-comment-as-not-spam', [])->html();
} elseif ($_instance->childHasBeenRendered('TwCVsrq')) {
    $componentId = $_instance->getRenderedChildComponentId('TwCVsrq');
    $componentTag = $_instance->getRenderedChildComponentTagName('TwCVsrq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TwCVsrq');
} else {
    $response = \Livewire\Livewire::mount('mark-comment-as-not-spam', []);
    $html = $response->html();
    $_instance->logRenderedChild('TwCVsrq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>
<?php /**PATH /Users/kylymbekmazaripov/Documents/projects/and/resources/views/components/modals-container.blade.php ENDPATH**/ ?>