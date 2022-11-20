<div id="post-comments">
@if ($comments->isNotEmpty())
        <div class="comments-container relative space-y-6 sm:ml-22 pt-4 my-8 mt-1">
            @foreach ($comments as $comment)
                <livewire:post-comment
                    :key="time().$comment->id"
                    :comment="$comment"
                    :postUserId="$post->user->id"
                    :simpleComment="$simpleComment"
                />
            @endforeach
        </div>

        @if ($comments->hasPages())
            <div class="my-8 md:ml-22 ">
                {{ $comments->onEachSide(1)->links() }}
            </div>
        @endif

    @else
        <div class="mx-auto w-70 mt-12">
            <img src="{{ asset('images/no-comments.svg') }}" alt="No Posts" class="mx-auto mix-blend-hard-light opacity-60">
            <div class="text-gray-400 text-center font-bold mt-6">No comments yet...</div>
        </div>
    @endif
</div>
