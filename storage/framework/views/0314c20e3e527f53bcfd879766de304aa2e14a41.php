<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $post)): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('edit-post', ['post' => $post])->html();
} elseif ($_instance->childHasBeenRendered('q2lwfRb')) {
    $componentId = $_instance->getRenderedChildComponentId('q2lwfRb');
    $componentTag = $_instance->getRenderedChildComponentTagName('q2lwfRb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('q2lwfRb');
} else {
    $response = \Livewire\Livewire::mount('edit-post', ['post' => $post]);
    $html = $response->html();
    $_instance->logRenderedChild('q2lwfRb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $post)): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('delete-post', ['post' => $post])->html();
} elseif ($_instance->childHasBeenRendered('RAn8EDe')) {
    $componentId = $_instance->getRenderedChildComponentId('RAn8EDe');
    $componentTag = $_instance->getRenderedChildComponentTagName('RAn8EDe');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('RAn8EDe');
} else {
    $response = \Livewire\Livewire::mount('delete-post', ['post' => $post]);
    $html = $response->html();
    $_instance->logRenderedChild('RAn8EDe', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>





<?php if(auth()->guard()->check()): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('edit-comment', [])->html();
} elseif ($_instance->childHasBeenRendered('UWfqBZe')) {
    $componentId = $_instance->getRenderedChildComponentId('UWfqBZe');
    $componentTag = $_instance->getRenderedChildComponentTagName('UWfqBZe');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UWfqBZe');
} else {
    $response = \Livewire\Livewire::mount('edit-comment', []);
    $html = $response->html();
    $_instance->logRenderedChild('UWfqBZe', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('delete-comment', [])->html();
} elseif ($_instance->childHasBeenRendered('YZh0xHv')) {
    $componentId = $_instance->getRenderedChildComponentId('YZh0xHv');
    $componentTag = $_instance->getRenderedChildComponentTagName('YZh0xHv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('YZh0xHv');
} else {
    $response = \Livewire\Livewire::mount('delete-comment', []);
    $html = $response->html();
    $_instance->logRenderedChild('YZh0xHv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mark-comment-as-spam', [])->html();
} elseif ($_instance->childHasBeenRendered('Mf5RX86')) {
    $componentId = $_instance->getRenderedChildComponentId('Mf5RX86');
    $componentTag = $_instance->getRenderedChildComponentTagName('Mf5RX86');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Mf5RX86');
} else {
    $response = \Livewire\Livewire::mount('mark-comment-as-spam', []);
    $html = $response->html();
    $_instance->logRenderedChild('Mf5RX86', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>

<?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mark-comment-as-not-spam', [])->html();
} elseif ($_instance->childHasBeenRendered('IS28YnO')) {
    $componentId = $_instance->getRenderedChildComponentId('IS28YnO');
    $componentTag = $_instance->getRenderedChildComponentTagName('IS28YnO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IS28YnO');
} else {
    $response = \Livewire\Livewire::mount('mark-comment-as-not-spam', []);
    $html = $response->html();
    $_instance->logRenderedChild('IS28YnO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>
<?php /**PATH /Users/kylymbekmazaripov/Sites/ecomoney/resources/views/components/modals-container.blade.php ENDPATH**/ ?>