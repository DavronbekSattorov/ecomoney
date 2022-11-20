<nav x-data="{ open: false }" class="bg-white border-b border-gray-100  sticky top-0 z-20 dark:bg-gray-700">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-10 sm:h-16 ">
            <div class="flex ">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('post.index') }}">
                        <x-jet-application-mark
                            class="block h-7 sm:h-10 w-auto"
                        />
                    </a>
                </div>

            </div>
            <button id="theme-toggle" type="button" class="group text-gray-500 dark:text-gray-400 sm:hover:bg-gray-100 sm:dark:hover:bg-gray-600  rounded-lg text-sm sm:p-2 p-1 sm:w-10 w-8">
                <svg id="theme-toggle-dark-icon" class="md:group-hover:scale-125 hidden w-6 h-6 transition ease-out duration-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                <svg id="theme-toggle-light-icon" class="md:group-hover:scale-125 hidden w-6 h-6 transition ease-out duration-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </button>


            <!-- Hamburger -->
{{--            <div class="-mr-2 flex items-center justify-between sm:hidden">--}}
                @auth()

                    <div class=" space-x-8 sm:-my-px sm:ml-10 sm:flex ">
                        <x-jet-nav-link href="{{ route('post.index') }}" class="sm:w-28 group md:hover:bg-gray-200/75 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 transition ease-out duration-100 md:dark:hover:text-white rounded-lg p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-2 stroke-current dark:stroke-gray-200 md:group-hover:scale-125 transition ease-out duration-100" width="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <rect x="10" y="12" width="4" height="4" />
                            </svg>
                            <span class="ml-2 hidden sm:block">
                                {{ __('Home') }}
                            </span>

                        </x-jet-nav-link>



                    </div>

                    <div class=" space-x-8 sm:-my-px sm:ml-10 sm:flex ">
                            @php
                                $createPost = route('create-post');
                                if(request()->route()->uri == 'club/{club}'){
                                $url = request()->url();
                                $createPost = substr($url, strpos($url, 'club') + 5);
                                $createPost = route('create-post').'?clubsToPost='.$createPost;
                                }
                            @endphp
                        <x-jet-nav-link
                            href="{{$createPost}}"
                            class="group md:hover:bg-gray-200/75 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 transition ease-out duration-100 md:dark:hover:text-white rounded-lg p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28" zoomAndPan="magnify" viewBox="0 0 150 149.999998"  preserveAspectRatio="xMidYMid meet" version="1.0" class="md:group-hover:scale-110 transition ease-out duration-100">
                                <defs>
                                    <clipPath id="id1">
                                        <path d="M 0 0 L 150 0 L 150 149.25 L 0 149.25 Z M 0 0 " clip-rule="nonzero"/>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#id1)">
                                    <path class="fill-current dark:fill-gray-200" d="M 3.324219 149.875 C 2.867188 149.875 2.414062 149.773438 1.980469 149.542969 C 0.554688 148.800781 -0.00390625 147.042969 0.742188 145.613281 C 3.449219 140.382812 67.992188 17.308594 146.375 0.113281 C 147.3125 -0.0859375 148.25 0.167969 148.949219 0.789062 C 149.640625 1.421875 149.996094 2.351562 149.890625 3.285156 C 149.6875 5.113281 144.675781 48.347656 123.703125 64.035156 C 123.1875 64.429688 122.519531 64.628906 121.890625 64.617188 L 97.671875 63.984375 L 109.8125 73.933594 C 110.445312 74.445312 110.824219 75.199219 110.875 76.011719 C 110.929688 76.824219 110.636719 77.621094 110.074219 78.207031 C 108.335938 80.03125 66.964844 123.023438 27.714844 129.34375 C 26.140625 129.558594 24.632812 128.515625 24.378906 126.921875 C 24.128906 125.332031 25.207031 123.832031 26.792969 123.578125 C 59.167969 118.367188 94.546875 85.371094 103.644531 76.410156 L 87.398438 63.101562 C 86.433594 62.3125 86.082031 61 86.511719 59.828125 C 86.949219 58.667969 88.195312 57.933594 89.316406 57.925781 L 121.003906 58.753906 C 135.820312 46.832031 141.757812 17.695312 143.507812 6.824219 C 69.523438 26.910156 6.546875 147.066406 5.902344 148.300781 C 5.386719 149.296875 4.375 149.875 3.324219 149.875 " fill-opacity="1" fill-rule="nonzero"/>
                                </g>
                            </svg>
                            <span class="ml-2 hidden sm:block">
                                {{ __('Create Post') }}

                                </span>
                        </x-jet-nav-link>

                    </div>

                <div class=" space-x-8 sm:-my-px sm:ml-10 sm:flex "
                >
                        <x-jet-nav-link class="group md:hover:bg-gray-200/75 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 transition ease-out duration-100 md:dark:hover:text-white rounded-lg p-2">
                            <livewire:comment-notifications />
                        </x-jet-nav-link>
                </div>





                @else
                @endauth
            <div class=" flex shrink-0 sm:items-center sm:ml-6">
            @auth
                {{--                    <livewire:comment-notifications />--}}




                <!-- Settings Dropdown -->
                    <div class="ml-3 relative ">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex  text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover  md:hover:ring-2 ring-main-green-light " src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                @endif
                            </x-slot>

                            <x-slot name="content" >
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>


                                <x-jet-dropdown-link href="{{ route('user.show',auth()->user()->username) }}" class="flex justify-between items-center group">
                                    <span>
                                        {{ __('Profile') }}
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle stroke-current md:group-hover:scale-125 transition ease-out duration-100" width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <circle cx="12" cy="12" r="9" />
                                        <circle cx="12" cy="10" r="3" />
                                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                    </svg>
                                </x-jet-dropdown-link>
                                @admin
                                    <x-jet-dropdown-link href="{{ route('club.create') }}" class="flex justify-between items-center group">
                                        <span>
                                            {{ __('Create a club') }}
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28" zoomAndPan="magnify" viewBox="0 0 150 149.999998"  preserveAspectRatio="xMidYMid meet" version="1.0" class="md:group-hover:scale-110 transition ease-out duration-100">
                                            <defs>
                                                <clipPath id="id1">
                                                    <path d="M 0 0 L 150 0 L 150 149.25 L 0 149.25 Z M 0 0 " clip-rule="nonzero"/>
                                                </clipPath>
                                            </defs>
                                            <g clip-path="url(#id1)">
                                                <path class="fill-current dark:fill-gray-200" d="M 3.324219 149.875 C 2.867188 149.875 2.414062 149.773438 1.980469 149.542969 C 0.554688 148.800781 -0.00390625 147.042969 0.742188 145.613281 C 3.449219 140.382812 67.992188 17.308594 146.375 0.113281 C 147.3125 -0.0859375 148.25 0.167969 148.949219 0.789062 C 149.640625 1.421875 149.996094 2.351562 149.890625 3.285156 C 149.6875 5.113281 144.675781 48.347656 123.703125 64.035156 C 123.1875 64.429688 122.519531 64.628906 121.890625 64.617188 L 97.671875 63.984375 L 109.8125 73.933594 C 110.445312 74.445312 110.824219 75.199219 110.875 76.011719 C 110.929688 76.824219 110.636719 77.621094 110.074219 78.207031 C 108.335938 80.03125 66.964844 123.023438 27.714844 129.34375 C 26.140625 129.558594 24.632812 128.515625 24.378906 126.921875 C 24.128906 125.332031 25.207031 123.832031 26.792969 123.578125 C 59.167969 118.367188 94.546875 85.371094 103.644531 76.410156 L 87.398438 63.101562 C 86.433594 62.3125 86.082031 61 86.511719 59.828125 C 86.949219 58.667969 88.195312 57.933594 89.316406 57.925781 L 121.003906 58.753906 C 135.820312 46.832031 141.757812 17.695312 143.507812 6.824219 C 69.523438 26.910156 6.546875 147.066406 5.902344 148.300781 C 5.386719 149.296875 4.375 149.875 3.324219 149.875 " fill-opacity="1" fill-rule="nonzero"/>
                                            </g>
                                        </svg>
                                    </x-jet-dropdown-link>
                                @endadmin


                                <x-jet-dropdown-link href="{{ route('saved') }}" class="flex justify-between items-center group">
                                    <span>
                                        {{ __('Saved Posts') }}
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bookmarks md:group-hover:scale-125 transition ease-out duration-100 stroke-current" width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M13 7a2 2 0 0 1 2 2v12l-5 -3l-5 3v-12a2 2 0 0 1 2 -2h6z" />
                                        <path d="M9.265 4a2 2 0 0 1 1.735 -1h6a2 2 0 0 1 2 2v12l-1 -.6" />
                                    </svg>
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('profile.show') }}" class="flex justify-between items-center group">
                                    <span>
                                        {{ __('Settings') }}
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings stroke-current md:group-hover:scale-125 transition ease-out duration-100" width="28" height="28" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                </x-jet-dropdown-link>


                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}

                                    </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>


                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}" class="flex justify-between items-center group"
                                                         @click.prevent="$root.submit();">
                                        <span>
                                            {{ __('Log Out') }}
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout md:group-hover:scale-125 transition ease-out duration-100 stroke-current" width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                            <path d="M7 12h14l-3 -3m0 6l3 -3" />
                                        </svg>
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @else
                    <div class=" space-x-8 sm:-my-px sm:ml-10 flex ">
                        <x-jet-nav-link href="{{ route('login') }}" >

                            <span class="ml-2  block">
                                    {{ __('Log in') }}
                                </span>

                        </x-jet-nav-link>

                    </div>

                    <div class=" space-x-8 sm:-my-px sm:ml-10 flex ">
                        <x-jet-nav-link href="{{ route('register') }}" >

                            <span class="ml-2 block">
                                    {{ __('Register') }}
                                </span>

                        </x-jet-nav-link>

                    </div>
{{--                    <a href="{{ route('login') }}" class=" text-blue-700 no-underline hover:underline ">Log in</a>--}}

{{--                    @if (Route::has('register'))--}}
{{--                        <a href="{{ route('register') }}" class="ml-4 text-blue-700 no-underline hover:underline">Register</a>--}}
{{--                    @endif--}}
                @endauth
            </div>
            </div>

{{--        </div>--}}
    </div>

</nav>
