<div class="space-y-6 my-8">
    @auth
        @forelse ($posts as $post)
            <livewire:post-index
                :key="$post->id"
                :post="$post"
                :votesCount="$post->votes_count"
                showMore="true"
            />

        @empty
           <x-no-posts/>
        @endforelse
    @else
        <x-not-authorized/>
    @endauth
{{--    <x-notification-success />--}}
</div> <!-- end ideas-container -->
