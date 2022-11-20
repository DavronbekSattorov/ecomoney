<div
    id="comment-{{ $comment->id }}"
    class="  comment-container relative bg-white dark:bg-gray-700 rounded-xl flex  mt-4 dark:text-white
    @if ($comment->user->isAdmin())
        ring-2 ring-offset-1 ring-green-300
@endif
"
>
    <div class="flex flex-col md:flex-row flex-1 px-4 md:px-0 py-2">
        <div class="w-full md:mx-2">
            <div class="flex items-center justify-between ">
                <div class="flex items-center text-xs  space-x-2 ">
                        <a href="{{route('user.show',$comment->user->username)}}" class=" flex items-center group" >
                            <img src="{{ $comment->user->getProfilePhotoUrlAttribute() }}" alt="avatar" class="w-7 h-7 object-cover rounded-full md:group-hover:ring-2 ring-main-green-light">
                            <div class="ml-2 md:group-hover:underline underline-offset-2" >{{ $comment->user->name }}</div>
                        </a>
{{--                            <div class="md:text-center uppercase text-blue-500  font-bold mt-1">Admin</div>--}}
                    <div>&bull;</div>
                    @if ($comment->user->id === $postUserId)
                        <div class="rounded-md text-white bg-blue-400 px-2">OP</div>
                        <div>&bull;</div>
                    @endif
                    <div class="truncate">{{ $comment->created_at->diffForHumans(null, false, true) }}</div>
                </div>
                @auth
                    @if(!$simpleComment)
                        <div
                        class="text-gray-900 flex items-center space-x-2"
                        x-data="{ isOpen: false }"
                    >
                        <div class="relative">
                            {{--                            <button--}}
                            {{--                                class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3"--}}
                            {{--                                @click="isOpen = !isOpen"--}}
                            {{--                            >--}}
                            {{--                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>--}}
                            {{--                            </button>--}}
                            <x-button-more @click="isOpen = !isOpen" />

                            <ul
                                {{--                                class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl z-10 py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0"--}}
                                {{--                                x-cloak--}}
                                {{--                                x-show.transition.origin.top.left="isOpen"--}}
                                {{--                                @click.away="isOpen = false"--}}
                                {{--                                @keydown.escape.window="isOpen = false"--}}
                                class="outline outline-1 outline-gray-300 absolute w-44 text-left font-semibold bg-white dark:bg-gray-700 rounded-xl  py-3 md:ml-8 top-8 md:top-8 right-0 md:right-0 shadow-md text-gray-600 dark:text-white text-sm z-10"
                                x-cloak
                                x-show.transition.origin.top.left="isOpen"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                            >
                                @can('update', $comment)
                                    <li>
                                        <a
                                            href="#"
                                            @click.prevent="
                                        isOpen = false
                                        Livewire.emit('setEditComment', {{ $comment->id }})
                                    "
                                            class=" block transition duration-150 ease-in px-3 py-3 flex justify-between items-center group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500"
                                        >
                                            <span>
                                                Edit Comment
                                            </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil md:group-hover:scale-125 transition ease-out duration-100 stroke-current" width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                                                <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                                            </svg>
                                        </a>
                                    </li>
                                @endcan

                                @can('delete', $comment)
                                    <li>
                                        <a
                                            href="#"
                                            @click.prevent="
                                        isOpen = false
                                        Livewire.emit('setDeleteComment', {{ $comment->id }})
                                    "
                                            class=" block transition duration-150 ease-in px-3 py-3 flex justify-between items-center group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500"
                                        >
                                            <span>Delete Comment</span>

                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash md:group-hover:scale-125 transition ease-out duration-100 stroke-current" width="28" height="28" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <line x1="4" y1="7" x2="20" y2="7" />
                                                <line x1="10" y1="11" x2="10" y2="17" />
                                                <line x1="14" y1="11" x2="14" y2="17" />
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                            </svg>
                                        </a>
                                    </li>
                                @endcan

                                <li>

                                    @if($comment->commentWasSpammedByUser(auth()->user()))
                                        <a
                                            href="javascript:void(0);"
                                            class="block transition ease-out duration-100 px-3 py-3 text-gray-400 flex justify-between items-center group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500"
                                        >
                                       <span >
                                            Marked as Spam
                                       </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-triangle md:group-hover:scale-125 transition ease-out duration-100 stroke-current " width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M12 9v2m0 4v.01" />
                                                <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
                                            </svg>
                                        </a>
                                    @else
                                        <a
                                            href="#"
                                            @click.prevent="
                                        isOpen = false
                                        Livewire.emit('setMarkAsSpamComment', {{ $comment->id }})
                                    "
                                            class="block transition ease-out duration-100 px-3 py-3 flex justify-between items-center group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500"
                                        >
                                            <span>
                                            Mark as Spam
                                        </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-triangle md:group-hover:scale-125 transition ease-out duration-100 stroke-red-500" width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M12 9v2m0 4v.01" />
                                                <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
                                            </svg>
                                        </a>
                                    @endif
                                </li>

                                @admin
                                @if ($comment->spamComments()->count() > 0)
                                    <li>
                                        <a
                                            href="#"
                                            @click.prevent="
                                            isOpen = false
                                            Livewire.emit('setMarkAsNotSpamComment', {{ $comment->id }})
                                        "
                                            class=" block transition duration-150 ease-in px-3 py-3 flex justify-between items-center group md:hover:bg-gray-100 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500"
                                        >
                                            <span>Not Spam</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hand-stop md:group-hover:scale-125 transition ease-out duration-100 stroke-current" width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M8 13v-7.5a1.5 1.5 0 0 1 3 0v6.5" />
                                                <path d="M11 5.5v-2a1.5 1.5 0 1 1 3 0v8.5" />
                                                <path d="M14 5.5a1.5 1.5 0 0 1 3 0v6.5" />
                                                <path d="M17 7.5a1.5 1.5 0 0 1 3 0v8.5a6 6 0 0 1 -6 6h-2h.208a6 6 0 0 1 -5.012 -2.7a69.74 69.74 0 0 1 -.196 -.3c-.312 -.479 -1.407 -2.388 -3.286 -5.728a1.5 1.5 0 0 1 .536 -2.022a1.867 1.867 0 0 1 2.28 .28l1.47 1.47" />
                                            </svg>
                                        </a>
                                    </li>
                                @endif
                                @endadmin
                            </ul>
                        </div>
                    </div>
                    @endif
                @endauth
            </div>
            <div class="text-gray-600 dark:text-white"
                 x-data="{ isCollapsed: true} "
            >
                @admin
                @if ($comment->spamComments()->count() > 0)
                    <div class="text-red-500 mb-2">Spam Reports: {{ $comment->spamComments()->count() }}</div>
                @endif
                @endadmin


                <div class="mt-3 md:mt-0 break-all ck-content ck-content-view
                                            max-h-[80vh] line-clamp-3"
                     x-init="
                        if($el.offsetHeight >= $el.scrollHeight){
                                isCollapsed = false
                         }"
                     :class="{'max-h-[80vh] line-clamp-3' : isCollapsed === true, '' : isCollapsed === false}"

                >
                    {!!$comment->body !!}
                </div>
                <a
                    x-show="isCollapsed"
                    x-cloak
                    class=" cursor-pointer show-btn text-blue-500 hover:underline  "
                    @click.prevent="isCollapsed = !isCollapsed" x-text="isCollapsed ? 'Show more' : 'Show less'">
                    <?=__('Show more'); ?>
                </a>
            </div>


        </div>
    </div>
</div> <!-- end comment-container -->
