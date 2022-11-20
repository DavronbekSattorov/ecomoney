<?php $__env->startComponent('mail::message'); ?>
    # A comment was posted on your post

    <?php echo e($comment->user->name); ?> commented on your post:

    **<?php echo e($comment->post->title); ?>**

    Comment: <?php echo e($comment->body); ?>


    <?php $__env->startComponent('mail::button', ['url' => route('post.show', $comment->post)]); ?>
        Go to Post
    <?php echo $__env->renderComponent(); ?>

    Thanks,<br>
    <?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /Users/kylymbekmazaripov/Documents/projects/and/resources/views/emails/comment-added.blade.php ENDPATH**/ ?>