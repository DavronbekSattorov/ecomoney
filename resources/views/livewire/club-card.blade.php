<div class="md:w-104 block md:mx-1 mt-8 text-base ">
    <!-- Import data card -->
    <div class=" border bg-white dark:bg-gray-800 dark:text-white rounded-lg shadow-sm sticky top-[4.25rem]  ">
        @admin
        <a href="{{route('club.edit',$club->slug)}}" class="absolute right-2 bottom-2 group md:hover:bg-gray-200/75 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 transition ease-out duration-100 rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil stroke-current dark:stroke-gray-200 md:group-hover:scale-125 transition ease-out duration-100" width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
            </svg>
        </a>
        @endadmin
        <!-- Card header -->

        <img src="{{asset('images/club-card-background.jpg')}}" class="w-full rounded-t-lg" />
        <div class="flex justify-center -mt-8">
            <img src="{{$club->getProfilePhotoUrlAttribute() }}" class="w-28 h-28 object-cover rounded-full border-solid border-white border-2 -mt-3 bg-gray-100">
        </div>
        <div class="text-left px-3 pb-4 pt-2">
            <h3 class="flex justify-between items-center text-gray-700 dark:text-white text-lg bold font-sans">
                <span>{{$club->title}}</span>

                @if($hasFollowed)
                    <x-jet-secondary-button
                        wire:click.prevent="follow"
                        type="button"
                        class="flex"


                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-x stroke-current mr-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="9" cy="7" r="4" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M17 9l4 4m0 -4l-4 4" />
                        </svg>
                        Unfollow
                    </x-jet-secondary-button>

                @else
                    <x-jet-button
                        type="button"
                        wire:click.prevent="follow"
                        class="flex"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus stroke-current mr-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="9" cy="7" r="4" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 11h6m-3 -3v6" />
                        </svg>
                        Follow
                    </x-jet-button>
                @endif
            </h3>

            <div class="text-sm leading-normal mt-0 mb-2 dark:text-gray-300 font-medium lowercase">
                {{ $club->slug }}
            </div>
            <p class="mt-2 font-sans font-light dark:text-white tracking-wider">
                {{$club->about}}
            </p>
            <div class="flex justify-start text-base dark:text-gray-300 mt-2">

                <a class="w-1/3 truncate " href="{{route('club.show',$club->slug).'?searchType=members'}}">
                    <label for="followers" class="cursor-pointer
                                        sm:hover:text-green-500
                    ">{{$actionsCount['membersCount']}}<span class="text-sm  pl-1 ">Members </span></label>
                </a>

            </div>
        </div>



    </div>

</div>
