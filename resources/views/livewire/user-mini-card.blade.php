<a
    href="{{route('user.show', $user->username)}}"
    class="relative group flex items-center cursor-pointer p-2 w-full  rounded-lg overflow-hidden shadow hover:shadow-md bg-gray-50 dark:bg-gray-700  md:hover:outline md:hover:outline-gray-400 text-sm">
    <img class="w-10 h-10 object-cover rounded-full md:group-hover:ring-2 ring-main-green-light" src="{{$user->getProfilePhotoUrlAttribute()}}">
    <div class="ml-3">
        <p class="font-medium text-gray-800 dark:text-white">{{$user->name}}</p>
        <p class="text-xs text-gray-600 dark:text-gray-300">{{'@'.$user->username}}</p>
    </div>
    <x-jet-secondary-button
        type="button"
        class="ml-auto sm:group-hover:text-main-green-light "
    >
        View user >>
    </x-jet-secondary-button>
</a>
