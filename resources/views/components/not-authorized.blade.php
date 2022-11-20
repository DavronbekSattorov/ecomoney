<div class="my-6 text-center">
    <img src="
{{ asset('images/unauthorized.svg') }}
        " alt="No Posts" class="mx-auto  opacity-50">
    <div class="text-gray-400 text-center font-bold mt-6">You are not authorized</div>

    <x-jet-button
        wire:click.prevent="redirectToLogin"
        type="button"
        class="w-1/2 mt-4"
    >
        Login
    </x-jet-button>

    <x-jet-secondary-button
        wire:click.prevent="redirectToRegister"
        type="button"
        class="w-1/2 mt-4 hover:bg-gray-100"
    >
        Sign Up
    </x-jet-secondary-button>

</div>
