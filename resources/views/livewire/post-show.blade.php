<div class="post-and-buttons container">

{{--    <div class="post-container bg-white rounded-xl flex mt-4">--}}
{{--        <div class="flex flex-col md:flex-row flex-1 px-4 py-6">--}}
{{--            <div class="flex-none mx-2">--}}
{{--                <a href="#">--}}
{{--                    <img src="{{ $post->user->getProfilePhotoUrlAttribute() }}" alt="avatar" class="w-14 h-14 rounded-xl">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="w-full mx-2 md:mx-4">--}}
{{--                <h4 class="text-xl font-semibold mt-2 md:mt-0">--}}
{{--                    {{ $post->title }}--}}
{{--                </h4>--}}
{{--                <div class="text-gray-600 mt-3 ck-content ck-content-view ">--}}
{{--                    @admin--}}
{{--                    @if ($spamPostsCount > 0)--}}
{{--                        <div class="text-red-500 mb-2">Spam Reports: {{ $spamPostsCount }}</div>--}}
{{--                    @endif--}}
{{--                    @endadmin--}}
{{--                    {!! nl2br(e()) !!}--}}
{{--                    {!! $post->description !!}--}}
{{--                </div>--}}

{{--                <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">--}}
{{--                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">--}}
{{--                        <div class="hidden md:block font-bold text-gray-900">{{ $post->user->name }}</div>--}}
{{--                        <div class="hidden md:block">&bull;</div>--}}
{{--                        <div>{{ $post->created_at->diffForHumans() }}</div>--}}
{{--                        <div>&bull;</div>--}}
{{--                        <div class="text-gray-900">{{ $post->comments()->count() }} comments</div>--}}
{{--                    </div>--}}
{{--                    <div--}}
{{--                        class="flex items-center space-x-2 mt-4 md:mt-0"--}}
{{--                        x-data="{ isOpen: false }"--}}
{{--                    >--}}
{{--                        @auth--}}
{{--                            <div class="relative">--}}
{{--                                <button--}}
{{--                                    class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3"--}}
{{--                                    @click="isOpen = !isOpen"--}}
{{--                                >--}}
{{--                                    <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>--}}
{{--                                </button>--}}
{{--                                <ul--}}
{{--                                    class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl z-10 py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0"--}}
{{--                                    x-cloak--}}
{{--                                    x-show.transition.origin.top.left="isOpen"--}}
{{--                                    @click.away="isOpen = false"--}}
{{--                                    @keydown.escape.window="isOpen = false"--}}
{{--                                >--}}
{{--                                    @can('update', $post)--}}
{{--                                        <li>--}}
{{--                                            <a--}}
{{--                                                href="#"--}}
{{--                                                @click.prevent="--}}
{{--                                                isOpen = false--}}
{{--                                                $dispatch('custom-show-edit-modal')--}}
{{--                                            "--}}
{{--                                                class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3"--}}
{{--                                            >--}}
{{--                                                Edit Post--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    @endcan--}}

{{--                                    @can('delete', $post)--}}
{{--                                        <li>--}}
{{--                                            <a--}}
{{--                                                href="#"--}}
{{--                                                @click.prevent="--}}
{{--                                                isOpen = false--}}
{{--                                                $dispatch('custom-show-delete-modal')--}}
{{--                                            "--}}
{{--                                                class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3"--}}
{{--                                            >--}}
{{--                                                Delete Post--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    @endcan--}}

{{--                                    <li>--}}

{{--                                        @if($hasSpammedPost)--}}
{{--                                            <a--}}
{{--                                                href="javascript:void(0);"--}}
{{--                                                class="bg-gray-100 block transition duration-150 ease-in px-5 py-3"--}}
{{--                                            >--}}
{{--                                                Marked as Spam--}}
{{--                                            </a>--}}
{{--                                        @else--}}
{{--                                            <a--}}
{{--                                                id="mark-as-spam"--}}
{{--                                                href="#"--}}
{{--                                                @click.prevent="--}}
{{--                                                isOpen = false--}}
{{--                                                $dispatch('custom-show-mark-post-as-spam-modal')--}}
{{--                                            "--}}
{{--                                                class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3"--}}
{{--                                            >--}}
{{--                                                Mark as Spam--}}
{{--                                            </a>--}}
{{--                                        @endif--}}
{{--                                    </li>--}}

{{--                                    @admin--}}
{{--                                    @if ($spamPostsCount > 0)--}}
{{--                                        <li>--}}
{{--                                            <a--}}
{{--                                                href="#"--}}
{{--                                                @click.prevent="--}}
{{--                                                    isOpen = false--}}
{{--                                                    $dispatch('custom-show-mark-post-as-not-spam-modal')--}}
{{--                                                "--}}
{{--                                                class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3"--}}
{{--                                            >--}}
{{--                                                Not Spam--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    @endif--}}
{{--                                    @endadmin--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        @endauth--}}
{{--                    </div>--}}

{{--                    <div class="flex items-center md:hidden mt-4 md:mt-0">--}}
{{--                        <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">--}}
{{--                            <div class="text-sm font-bold leading-none @if($hasVoted) text-blue @endif">{{ $votesCount }}</div>--}}
{{--                            <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>--}}
{{--                        </div>--}}
{{--                        @if ($hasVoted)--}}
{{--                            <button--}}
{{--                                wire:click.prevent="vote"--}}
{{--                                class="w-20 bg-blue text-white border border-blue font-bold text-xxs uppercase rounded-xl hover:bg-blue-hover transition duration-150 ease-in px-4 py-3 -mx-5"--}}
{{--                            >--}}
{{--                                Voted--}}
{{--                            </button>--}}
{{--                        @else--}}
{{--                            <button--}}
{{--                                wire:click.prevent="vote"--}}
{{--                                class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl hover:border-gray-400 transition duration-150 ease-in px-4 py-3 -mx-5"--}}
{{--                            >--}}
{{--                                Vote--}}
{{--                            </button>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div> <!-- end post-container -->--}}
    <livewire:post-full
        :key="$post->id"
        :post="$post"
{{--        :votesCount="$votesCount"--}}
        limitHeight=""
        showMore="false"
    />




    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex flex-col md:flex-row items-center space-x-4 md:ml-6">
            <livewire:add-comment :post="$post" />

        </div>


    </div> <!-- end buttons-container -->
</div>
