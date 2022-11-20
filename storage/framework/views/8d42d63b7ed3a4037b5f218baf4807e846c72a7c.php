<div class="post-and-buttons container">





















































































































































    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post-full', ['post' => $post,'limitHeight' => '','showMore' => 'false'])->html();
} elseif ($_instance->childHasBeenRendered($post->id)) {
    $componentId = $_instance->getRenderedChildComponentId($post->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($post->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($post->id);
} else {
    $response = \Livewire\Livewire::mount('post-full', ['post' => $post,'limitHeight' => '','showMore' => 'false']);
    $html = $response->html();
    $_instance->logRenderedChild($post->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>




    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex flex-col md:flex-row items-center space-x-4 md:ml-6">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('add-comment', ['post' => $post])->html();
} elseif ($_instance->childHasBeenRendered('l3072072935-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3072072935-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3072072935-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3072072935-1');
} else {
    $response = \Livewire\Livewire::mount('add-comment', ['post' => $post]);
    $html = $response->html();
    $_instance->logRenderedChild('l3072072935-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        </div>


    </div> <!-- end buttons-container -->
</div>
<?php /**PATH /Users/kylymbekmazaripov/Sites/ecomoney/resources/views/livewire/post-show.blade.php ENDPATH**/ ?>