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
            @if($posts->hasMorePages())
                <x-spinning-circle/>
                <div
                    x-data="{
                observe(){
                    const observer = new IntersectionObserver((posts)=>{
                        posts.forEach(post => {
                            if(post.isIntersecting){
                                @this.loadMore()
                            }
                        })
                    })
                    observer.observe(this.$el)
                }
                }"
                    x-init="observe"
                >

                </div>

            @endif
    @else
        <x-not-authorized/>
    @endauth
{{--    <x-notification-success />--}}
</div> <!-- end ideas-container -->
