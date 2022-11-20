<div class="md:w-104 md:block hidden md:mx-1 mt-8 text-base ">
    <!-- Import data card -->
    <div class=" border bg-white dark:bg-gray-800 dark:text-white rounded-lg shadow-sm sticky top-[4.25rem]  md:hover:outline md:hover:outline-gray-400">
        <!-- Card header -->
        <div class="flex items-center justify-between px-4 py-3 border-b ">
            <h5 class="font-semibold mx-auto text-lg">Recommended 🔥</h5>
        </div>
        <ul class="px-4 pb-4 space-y-4 divide-y ">
            @foreach($rec_waste_types as $waste_type)
                <li class=" pt-3  flex  items-center space-x-3">
                <a class="flex items-center shrink-0 group " href="{{route('waste_type.show', $waste_type->slug)}}">
                    <img src="{{ $waste_type->getProfilePhotoUrlAttribute() }}" alt="user avatar" class="mx-auto object-cover rounded-full opacity-80 h-8 w-8 md:group-hover:ring-2 ring-main-green-light  ">
                    <div class="ml-3">
                        <h5  class=" md:group-hover:underline">
                            {{$waste_type->title}}
                        </h5>
                        <h3  class="text-sm text-gray-500 dark:text-gray-300 ">{{ $waste_type->members_count }} members</h3>
                    </div>
                </a>
                </li>
            @endforeach

{{--            @forelse ($rec_posts as $post)--}}
{{--                <li class=" pt-3  flex  items-center space-x-3">--}}
{{--                        <a class="flex items-center shrink-0 group " href="{{route('user.show', $post->user->username)}}">--}}
{{--                            <img src="{{ $post->user->getProfilePhotoUrlAttribute() }}" alt="user avatar" class="mx-auto object-cover rounded-full opacity-80 w-8 h-8 md:group-hover:ring-2 ring-main-green-light ">--}}
{{--                        </a>--}}
{{--                        <div>--}}
{{--                            <a href="{{    route('post.show', $post)     }}" class=" md:hover:underline">--}}
{{--                                <h5 >{{$post->title}}</h5>--}}
{{--                            </a>--}}
{{--                            <a href="{{route('user.show', $post->user->username)}}" class="text-sm text-gray-500 dark:text-gray-300 md:hover:underline ">{{ $post->user->name }}</a>--}}
{{--                        </div>--}}


{{--                </li>--}}

{{--            @empty--}}
{{--                <x-no-posts/>--}}
{{--            @endforelse--}}

        </ul>
    </div>
</div>
