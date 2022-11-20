@component('mail::message')
    # A comment was posted on your post

    {{ $comment->user->name }} commented on your post:

    **{{ $comment->post->title }}**

    Comment: {{ $comment->body }}

    @component('mail::button', ['url' => route('post.show', $comment->post)])
        Go to Post
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
