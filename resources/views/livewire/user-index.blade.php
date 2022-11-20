
<div class="space-y-6 my-8">
    <div class="flex px-3 justify-between text-lg dark:text-white">

        <div class="w-1/3 truncate ">
            <input wire:model="filter" class="hidden" type="radio" name="posts" id="posts" value="posts" >
            <label for="posts" class="cursor-pointer
                                    sm:hover:text-green-500
                                    @if($filter =='posts' || !$filter)
                                            border-b-2
                                            border-gray-500
                                            dark:border-white
                                    @endif
                                    ">Posts <span class=" text-base pl-px "> {{$actionsCount['postsCount']}}</span></label>
        </div>
        <div class="w-1/3 truncate  text-center">
            <input wire:model="filter"  class="hidden" type="radio" name="comments" id="comments" value="comments" >
            <label for="comments" class="cursor-pointer
                                    sm:hover:text-green-500
                                    @if($filter =='comments')
                border-b-2
                border-gray-500
                dark:border-white
@endif
                ">Comments<span class=" text-base pl-px"> {{$actionsCount['commentsCount']}}</span></label>
        </div>
{{--        <div class="w-1/3 truncate text-right">--}}
{{--            <input wire:model="filter" class="hidden" type="radio" name="upvotes" id="upvotes" value="upvotes" >--}}
{{--            <label for="upvotes" class="cursor-pointer--}}
{{--                                    sm:hover:text-green-500--}}

{{--                                    @if($filter =='upvotes')--}}
{{--                                        border-b-2--}}
{{--                                        dark:border-white--}}
{{--                                        border-gray-500--}}
{{--                                    @endif--}}
{{--                                     ">Upvotes<span class=" text-base pl-px"> {{$actionsCount['votesCount']}}</span></label>--}}
{{--        </div>--}}


    </div>

{{--    @auth--}}
        @forelse ($posts as $post)
            <livewire:post-index
                :key="time().$post->id"
                :post="$post"
{{--                :votesCount="$post->votes_count"--}}
                showMore="true"
            />
            @if($filter =='comments')
                <livewire:user-comments :post="$post"  :key="time().$post->id" :userId="$userId" />
            @endif

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
    {{--    <x-notification-success />--}}
</div> <!-- end ideas-container -->
