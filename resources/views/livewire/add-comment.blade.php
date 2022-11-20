<div
    x-data="{ isOpen: false }"
    x-init="
        Livewire.on('commentWasAdded', () => {
            isOpen = false
        })

        Livewire.hook('message.processed', (message, component) => {
            {{-- Pagination --}}
        if (['gotoPage', 'previousPage', 'nextPage'].includes(message.updateQueue[0].method)) {
            const firstComment = document.querySelector('.comment-container:first-child')
            firstComment.scrollIntoView({ behavior: 'smooth'})
        }

{{-- Adding Comment --}}
        if (['commentWasAdded', 'statusWasUpdated'].includes(message.updateQueue[0].payload.event)
         && message.component.fingerprint.name === 'post-comments') {
            const lastComment = document.querySelector('.comment-container:last-child')
            lastComment.scrollIntoView({ behavior: 'smooth'})
            lastComment.classList.add('bg-green-50')
            setTimeout(() => {
                lastComment.classList.remove('bg-green-50')
            }, 5000)
        }
    })

@if (session('scrollToComment'))
        const commentToScrollTo = document.querySelector('#comment-{{ session('scrollToComment') }}')
            commentToScrollTo.scrollIntoView({ behavior: 'smooth'})
            commentToScrollTo.classList.add('bg-green-50')
            setTimeout(() => {
                commentToScrollTo.classList.remove('bg-green-50')
            }, 5000)
        @endif
        "
    class="relative"
>
{{--    <button--}}
{{--        type="button"--}}
{{--        @click="--}}
{{--            isOpen = !isOpen--}}
{{--            if (isOpen) {--}}
{{--                $nextTick(() => $refs.comment.focus())--}}
{{--            }--}}
{{--        "--}}
{{--        class="flex items-center justify-center h-11 w-32 text-sm bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"--}}
{{--    >--}}
{{--        Reply--}}
{{--    </button>--}}
    <x-jet-button
        type="button"
{{--        wire:click="loadCke"--}}
        @click="
            isOpen = !isOpen
{{--            if (isOpen) {--}}
{{--                $nextTick(() => $refs.comment.focus())--}}
{{--            }--}}
        "
    >
    Leave a comment
    </x-jet-button>
    <div
        class="absolute z-10 w-80 md:w-104 text-left font-semibold text-sm bg-white dark:bg-gray-700 shadow-dialog rounded-lg mt-2 outline outline-1 outline-gray-300"
        x-cloak
        x-show.transition.origin.top.left="isOpen"
        x-transition:enter.duration.400ms
        @click.away="isOpen = false"
        @keydown.escape.window="isOpen = false"
    >
        @auth
            <form wire:submit.prevent="addComment" action="#" class="space-y-4 px-4 py-6" novalidate>

                    <textarea x-ref="comment"
                              wire:model="comment"
{{--                              data-text="@this" --}}
                              name="post_comment" id="post_comment"  placeholder="Share your thoughts..." class="w-full border-gray-300 dark:bg-gray-700 dark:text-white  focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50  px-4 py-2 rounded-md placeholder-gray-700 dark:placeholder-white"></textarea>

                    @error('comment')
                    <p class="text-red text-xs mt-1">{{ $message }}</p>
                    @enderror

                <div class="flex flex-col md:flex-row items-center md:space-x-3">
                    <x-jet-button
                        id="comment_submit"
                        type="submit"
                        wire:click="loadCke"
                        {{--                        class="flex items-center justify-center h-11 w-full md:w-1/2 text-sm bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"--}}
                    >
                        Post Comment
                    </x-jet-button>

                </div>

            </form>
        @else
            <div class="px-4 py-6">
                <p class="font-normal dark:text-white">Please login or create an account to post a comment.</p>
                <div class="flex items-center space-x-3 mt-8">
                    <a
                        wire:click.prevent="redirectToLogin"
                        href="{{ route('login') }}"
                        class="w-1/2 text-center"
                        {{--                        class="w-1/2 h-11 text-sm text-center bg-blue text-white font-semibold rounded-xl hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"--}}
                    >
                        <x-primary-span>
                            Login
                        </x-primary-span>
                    </a>
                    <a
                        wire:click.prevent="redirectToRegister"
                        href="{{ route('register') }}"
                        class="w-1/2 text-center"
{{--                        class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"--}}
                    >
                        <x-secondary-span>
                            Sign Up
                        </x-secondary-span>
                    </a>
                </div>
            </div>
        @endauth
    </div>
</div>
