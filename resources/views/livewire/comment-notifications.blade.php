<div
    wire:poll="getNotificationCount"
    x-data="{ isOpen: false }"
    class="relative "
>
{{--<x-jet-nav-link--}}
{{--    wire:poll="getNotificationCount"--}}
{{--    x-data="{ isOpen: false }"--}}
{{--    class="relative">--}}

    <button @click=
            "isOpen = !isOpen
        if (isOpen) {
            Livewire.emit('getNotifications')
        }
    "
            class="relative flex justify-between items-center  rounded-lg px-1 transition ease-out duration-100 font-medium leading-5"
    >
{{--        <svg class="h-8 w-8 text-gray-400" viewBox="0 0 20 20" fill="currentColor">--}}
{{--            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />--}}
{{--        </svg>--}}
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell stroke-current dark:stroke-gray-200 md:group-hover:scale-125 transition ease-out duration-100" width="32" height="32" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
        </svg>


        @if ($notificationCount)
            <div class="absolute rounded-full bg-red-500 text-white text-xxs w-5 h-5 flex justify-center items-center  -top-1 left-5 ">{{ $notificationCount }}</div>
        @endif
        <span class="ml-2 hidden sm:block">
                                    {{ __('Notifications') }}
                                </span>
    </button>
    <ul
        class="absolute w-76 md:w-96 text-left text-gray-700 dark:text-white text-sm bg-white dark:bg-gray-700 shadow-dialog rounded-xl max-h-128 overflow-y-auto z-10 -right-20 md:-right-12 outline outline-gray-400 top-16"
        x-cloak
        x-show.transition.origin.top="isOpen"
        @click.away="isOpen = false"
        @keydown.escape.window="isOpen = false"
    >
        @if ($notifications->isNotEmpty() && ! $isLoading)
            @foreach ($notifications as $notification)
                <li>
                    <a
                        href="{{ route('post.show', $notification->data['post_slug']) }}"
                        @click.prevent="
                        isOpen = false
                    "
                        wire:click.prevent="markAsRead('{{ $notification->id }}')"
                        class="flex hover:bg-gray-100 dark:hover:bg-gray-600 transition duration-150 ease-in px-5 py-3 dark:text-white"
                    >
                        <img src="{{ $notification->data['user_avatar'] }}" class="rounded-full w-10 h-10" alt="avatar">
                        <div class="ml-4">
                            <div class="line-clamp-6">
                                <span class="font-semibold">{{ $notification->data['user_name'] }}</span> commented on
                                <span class="font-semibold">{{ $notification->data['post_title'] }}</span>:
                                <span>"{{ $notification->data['comment_body'] }}"</span>
                            </div>
                            <div class="text-xs text-gray-500 mt-2">{{ $notification->created_at->diffForHumans() }}</div>
                        </div>
                    </a>
                </li>
            @endforeach
            <li class="border-t border-gray-300 text-center">
                <button
                    wire:click="markAllAsRead"
                    @click="isOpen = false"
                    class="w-full block font-semibold hover:bg-gray-100 dark:hover:bg-gray-600 transition duration-150 ease-in px-5 py-4"
                >
                    Mark all as read
                </button>
            </li>
        @elseif ($isLoading)
            @foreach (range(1,3) as $item)
                <li class="animate-pulse flex items-center transition duration-150 ease-in px-5 py-3">
                    <div class="bg-gray-200 rounded-xl w-10 h-10"></div>
                    <div class="flex-1 ml-4 space-y-2">
                        <div class="bg-gray-200 w-full rounded h-4"></div>
{{--                        <div class="bg-gray-200 w-full rounded h-4"></div>--}}
{{--                        <div class="bg-gray-200 w-1/2 rounded h-4"></div>--}}
                    </div>
                </li>
            @endforeach
        @else
            <li class="mx-auto w-40 py-6 ">
                <img src="{{ asset('images/no-data.svg') }}" alt="No Posts" class="mx-auto opacity-60 ">
                <div class="text-gray-400 text-center font-bold mt-6">No new notifications</div>
            </li>
        @endif
    </ul>
</div>
{{--</x-jet-nav-link>--}}
