<div>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6 dark:text-white">
{{--        <div class="w-full md:w-1/3">--}}
{{--        </div>--}}
            @if($searchType =='posts' || !$searchType)
            <div class="w-full md:w-1/2">

            <select wire:model="option"
    {{--                    name="other_filters" id="other_filters" --}}
                        class="w-full border-gray-300 dark:bg-gray-700  focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm cursor-pointer ">
                    <option value="buy">Buy</option>
                    <option value="sell">Sell</option>
    {{--                @auth--}}
    {{--                    <option value="My Posts">My Posts</option>--}}
    {{--                @endauth--}}
    {{--                @admin--}}
    {{--                <option value="Spam Posts">Spam Posts</option>--}}
    {{--                <option value="Spam Comments">Spam Comments</option>--}}
    {{--                @endadmin--}}
                </select>
            </div>
            <div class="w-full md:w-1/2">

                <select
                    wire:model="wasteTypes"
                    wire:model="clubsId"
                    wire:model="clubsToPost"
                    name="wasteTypes"
                    name="other_filters" id="other_filters"
                    class=" w-full border-gray-300 dark:bg-gray-700  focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm cursor-pointer dark:text-white text-sm mr-2">
                    <option   value="not-selected" >Waste type</option>
                    @forelse($rec_waste_types as $wasteType)

                        <option value="{{$wasteType->slug}}"
                            {{($wasteType->slug) == $wasteTypesToPost ? 'selected' : ''}}
                        >
                            {{$wasteType->title}}
                        </option>
                    @empty
                        <x-no-posts message="No waste types available..."/>
                    @endforelse
                </select>
            </div>
            @endif



    </div>
    <div class="flex mt-2">
        <div class="w-full  relative">
            <x-jet-input
                wire:model="search" type="search" placeholder="Search" id="search"
                class="w-full pl-8 cursor-auto "
            />
            @if($searchType == 'clubs' || $searchType == 'users' )
                {!! '<script>document.getElementById("search").focus();</script>' !!}
            @endif
            {{--            <input wire:model="search" type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white border-none placeholder-gray-900 px-4 py-2 pl-8">--}}
            <div class="absolute top-0 flex itmes-center h-full ml-2 ">
                <svg class="w-4 text-gray-700 dark:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

    </div>

    <!-- end filters -->

<div class="space-y-3 my-8">
    <!-- component -->
    @if(isset($users)&& strlen($search) >= 3 || $searchType == 'users' ||$searchType == 'clubs')
        <div class="flex px-3 justify-start text-lg dark:text-white">
            <div class="w-1/3 truncate ">
                <input wire:model="searchType" class="hidden" type="radio" name="posts" id="posts" value="posts" >
                <label for="posts" class="cursor-pointer
                    sm:hover:text-green-500
                    @if($searchType =='posts' || !$searchType)
                        border-b-2
                        border-gray-500
                        dark:border-white
                    @endif
                    ">Posts
                </label>
            </div>
            <div class="w-1/3 truncate">
                <input wire:model="searchType" class="hidden" type="radio" name="users" id="users" value="users" >
                <label for="users" class="cursor-pointer
                            sm:hover:text-green-500
                            @if($searchType =='users' )
                                    border-b-2
                                    border-gray-500
                                    dark:border-white
                            @endif
                ">Users
                </label>
            </div>
            <div class="w-1/3 truncate">
                <input wire:model="searchType" class="hidden" type="radio" name="clubs" id="clubs" value="clubs" >
                <label for="clubs" class="cursor-pointer
                        sm:hover:text-green-500
                        @if($searchType =='clubs' )
                            border-b-2
                            border-gray-500
                            dark:border-white
                        @endif
                ">Clubs
                </label>
            </div>
        </div>
    @endif
    @if(isset($users) && $searchType =='users' && strlen($search) >= 3 )
        @forelse($users as $user)
            <livewire:user-mini-card :user="$user" :key="now().$user->id"/>
{{--            {{$user}}--}}
        @empty
            <x-no-posts message="No users found..."/>
        @endforelse
    @endif
    @if(isset($clubs) && $searchType =='clubs' && strlen($search) >= 3 )
        @forelse($clubs as $club)
            <livewire:club-mini-card :club="$club" :key="now().$club->id"/>
            {{--            {{$user}}--}}
        @empty
            <x-no-posts message="No clubs found..."/>
        @endforelse
    @endif
    @if(!$searchType  || $searchType ==='posts' )
        <div class="sm:flex sm:flex-wrap box-border">
            @forelse ($posts as $post)
                <div class="sm:flex sm:w-1/2 sm:p-2">

                <livewire:post-index
                        :key="$post->id"
                        :post="$post"
{{--                        :votesCount="$post->votes_count"--}}
                        {{--                limitHeight="max-h-[80vh] line-clamp-3"--}}

                    />
                </div>
            @empty
                <x-no-posts/>
            @endforelse
        </div>

    @endif
@if($posts->hasMorePages() && $searchType !=='users' && $searchType !=='clubs')
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
