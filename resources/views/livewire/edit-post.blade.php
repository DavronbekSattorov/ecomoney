<div
    x-cloak
    x-data="{ isOpen: false }"
    x-show="isOpen"
    @keydown.escape.window="isOpen = false"
    @custom-show-edit-modal.window="
        isOpen = true
        $nextTick(() => $refs.title.focus())
    "
    x-init="
        window.livewire.on('postWasUpdated', () => {
            isOpen = false
        })
    "
    class="fixed z-10 inset-0 overflow-y-auto"
    aria-labelledby="modal-title"
    role="dialog"
    aria-modal="true"
>
    <div class="flex items-end justify-center min-h-screen">
        <div
            x-show.transition.opacity="isOpen"
            class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
            aria-hidden="true">
        </div>

        <div
            x-show.transition.origin.bottom.duration.300ms="isOpen"
            class="modal bg-white dark:bg-gray-700  rounded-tl-xl rounded-tr-xl overflow-hidden transform transition-all py-4 md:w-175 sm:w-full"
        >
            <div class="absolute top-0 right-0 pt-4 pr-4">
                <button
                    @click="isOpen = false"
                    class="text-gray-400 hover:text-gray-500"
                >
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="bg-white dark:bg-gray-700 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <h3 class="text-center text-lg font-medium text-gray-900 dark:text-white">Edit Post</h3>
                <p class="text-xs text-center leading-5 text-gray-500 dark:text-gray-200 px-6 mt-4">You have one hour to edit your post from the time you created it.</p>

                <form wire:submit.prevent="updatePost" action="#" method="POST" class="space-y-4 px-4 py-6" novalidate>
                    <div>
{{--                        <input wire:model.defer="title" x-ref="title" type="text" class="w-full text-sm bg-gray-100 border-none rounded-xl placeholder-gray-900 px-4 py-2" placeholder="Your Post" >--}}
                        <x-jet-input wire:model.defer="title"  x-ref="title" type="text" placeholder="Post Title" class="block mt-1 w-full " ></x-jet-input>

                        @error('title')
                        <p class="text-red text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>

                    </div>

                    <div class="max-h-[60vh] overflow-scroll">
{{--                        <textarea id="textarea-post" wire:model.defer="description" data-text="@this"  name="post"  cols="30" rows="4" class="w-full bg-gray-100 rounded-xl border-none placeholder-gray-900 text-sm px-4 py-2" placeholder="Describe your post"  >--}}

{{--                        </textarea>--}}
                        <textarea   id="textarea-post" wire:model.defer="description" data-text="@this" cols="30" rows="4" class="hidden w-full bg-gray-100 rounded-xl border-none placeholder-gray-600 text-sm px-4 py-2 ck-content-view" placeholder="Content(optional)" >
                                                {!! $post->description !!}

                        </textarea>
                        @error('description')
                        <p class="text-red text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between space-x-3">

{{--                        <button--}}
{{--                            type="submit"--}}
{{--                            class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">--}}
{{--                            <span class="ml-1">Update</span>--}}
{{--                        </button>--}}
                        <x-jet-button
                            type="submit"
                            wire:click="loadCke"
                            id="submit"
                        >Update</x-jet-button>
                    </div>
                </form>
            </div>

        </div> <!-- end modal -->
    </div>
</div>
