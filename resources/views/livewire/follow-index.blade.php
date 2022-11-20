<div class="space-y-3 my-8">
    <a href="{{ route('user.show',$user->username) }}" class="flex items-center w-20 dark:text-white  hover:underline">
        <svg class="w-4 h-4 stroke-current " fill="none"  viewBox="0 0 24 24" >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        <span class="ml-2 ">Back</span>
    </a>
    <div class="sm:flex px-3 justify-start text-lg dark:text-white hidden ">

        <a class="w-1/3 truncate " href="{{route('user.show',$user->username).'?followType=followers'}}">
            <label for="followType" class="cursor-pointer
                                    sm:hover:text-green-500
                                    @if($followType =='followers' || !$followType)
                                            border-b-2
                                            border-gray-500
                                            dark:border-white
                                    @endif
                ">Followers <span class=" text-base pl-px "> {{$followCount['followersCount']}}</span></label>
        </a>
        <a class="w-1/3 truncate "href="{{route('user.show',$user->username).'?followType=followings'}}">
            <label for="comments" class="cursor-pointer
                                    sm:hover:text-green-500
                                    @if($followType =='followings')
                                            border-b-2
                                            border-gray-500
                                            dark:border-white
                                    @endif
                ">Followings<span class=" text-base pl-px"> {{$followCount['followingsCount']}}</span></label>
        </a>
    </div>

@forelse($users as $user)
    <livewire:user-mini-card :user="$user" :key="now().$user->id"/>
    {{--            {{$user}}--}}
@empty
    <x-no-posts message="No users found..."/>
@endforelse
    @if($users->hasMorePages())
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
</div>
