<x-app-layout>
    <form action="/club" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Club Title</label>
        <x-jet-input-error for="title" class="mt-2" />
        <x-jet-input  name="title" id="title" value="{{ old('title') }}" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-main-green-light focus:border-main-green-light dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main-green-light dark:focus:border-main-green-light" type="text" required/>
        <label for="about" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Club description</label>
        <x-jet-input-error for="about" class="mt-2" />
        <textarea name="about" id="about" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-main-green-light focus:border-main-green-light dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main-green-light dark:focus:border-main-green-light" placeholder="Your message..." required>{{ trim(old('about')) }}</textarea>
        <x-jet-input-error for="profile_photo_path" class="mt-2" />
        <label class="mt-4 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="profile_photo_path">Upload file</label>
        <input name="profile_photo_path" value="{{ old('profile_photo_path') }}" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="profile_photo_path" type="file">

        <x-jet-button class="mt-2">
            Submit
        </x-jet-button>
    </form>
</x-app-layout>
