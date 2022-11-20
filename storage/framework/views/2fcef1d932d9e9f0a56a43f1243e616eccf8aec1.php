<div class="post-and-buttons container">





















































































































































    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post-full', ['post' => $post,'votesCount' => $votesCount,'limitHeight' => '','showMore' => 'false'])->html();
} elseif ($_instance->childHasBeenRendered($post->id)) {
    $componentId = $_instance->getRenderedChildComponentId($post->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($post->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($post->id);
} else {
    $response = \Livewire\Livewire::mount('post-full', ['post' => $post,'votesCount' => $votesCount,'limitHeight' => '','showMore' => 'false']);
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
} elseif ($_instance->childHasBeenRendered('l405522594-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l405522594-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l405522594-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l405522594-1');
} else {
    $response = \Livewire\Livewire::mount('add-comment', ['post' => $post]);
    $html = $response->html();
    $_instance->logRenderedChild('l405522594-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        </div>


    </div> <!-- end buttons-container -->
</div>
<?php /**PATH /var/www/html/resources/views/livewire/post-show.blade.php ENDPATH**/ ?>