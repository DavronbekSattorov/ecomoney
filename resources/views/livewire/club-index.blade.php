<div>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6 dark:text-white">
        @if($searchType =='posts' || !$searchType && $searchType != 'members')
            <div class="w-full md:w-1/3">

                <select wire:model="filter"
                        class="w-full border-gray-300 dark:bg-gray-700  focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm cursor-pointer ">
                    <option  value="Newest" >Newest</option>
                    <option value="Top Voted">Top Voted</option>
                </select>
            </div>
        @endif


        @if($searchType != 'members')
                <div class="w-full  relative">
                    <x-jet-input
                        wire:model="search" type="search" placeholder="Search" id="search"
                        class="w-full pl-8 cursor-auto "
                    />
                    <div class="absolute top-0 flex itmes-center h-full ml-2 ">
                        <svg class="w-4 text-gray-700 dark:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
        @endif
    </div> <!-- end filters -->

    <div class="space-y-3 my-8">
        <!-- component -->
{{--        @if( strlen($search) >= 3 || $searchType == 'users' ||$searchType == 'club')--}}
            <div class="flex px-3 justify-start text-lg dark:text-white">


                <div class="w-1/3 truncate ">
                    <input wire:model="searchType" class="hidden" type="radio" name="posts" id="posts" value="posts" >
                    <label for="posts" class="cursor-pointer
                    sm:hover:text-green-500
                   @if($searchType =='posts' || !$searchType )
                        border-b-2
                        border-gray-500
                        dark:border-white
                    @endif
                        ">Posts
                        <span class=" text-base pl-px "> {{$actionsCount['postsCount']}}</span>
                    </label>
                </div>
                <div class="w-1/3 truncate">
                    <input wire:model="searchType" class="hidden" type="radio" name="members" id="members" value="members" >
                    <label for="members" class="cursor-pointer
                            sm:hover:text-green-500
                    @if($searchType =='members')
                        border-b-2
                        border-gray-500
                        dark:border-white
                    @endif
                        ">Members
                        <span class=" text-base pl-px "> {{$actionsCount['membersCount']}}</span>
                    </label>
                </div>
            </div>
{{--        @endif--}}

        @if(!$searchType  || $searchType ==='posts' )
            @forelse ($posts as $post)
                <livewire:post-index
                    :key="$post->id"
                    :post="$post"
                    :votesCount="$post->votes_count"
                    limitHeight="max-h-[80vh] line-clamp-3"
                    showMore="true"

                />
            @empty
                <x-no-posts/>
            @endforelse
        @endif
        @if($searchType =='members' )
            @forelse($users as $user)
                <livewire:user-mini-card :user="$user" :key="now().$user->id"/>
            @empty
                <x-no-posts message="No users found..."/>
            @endforelse
        @endif
        @if($posts->hasMorePages() && $searchType =='posts' || $users->hasMorePages()&& $searchType == 'members')
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
    </div> <!-- end ideas-container -->
    <x-notification-success
    />
</div>
