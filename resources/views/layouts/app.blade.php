<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:type" content="website" />
        <meta property="og:image" content="@yield('image',asset('images/andeska.png'))" />
        <meta property="og:title" content="@yield('title','Andeska ')" />
        <meta property="og:url" content="@yield('url',request()->url()) "/>
        <meta property="og:description" content="@yield('description','Where everyone is connected')" />
        <title>@yield('title','Andeska ')</title>
        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>
        <!--Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon_io/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon_io/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon_io/favicon-16x16.png')}}">
        <link rel="icon" type="image/png" href="{{asset('images/favicon_io/android-chrome-192x192.png')}}" sizes="192x192">
        <link rel="icon" type="image/png" href="{{asset('images/favicon_io/android-chrome-512x512.png')}}" sizes="512x512">
        <link rel="manifest" href="{{asset('images/favicon_io/site.webmanifest')}}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&display=swap">

        @livewireStyles
        <link rel="stylesheet" href="{{asset('css/ckeditor.css')}}" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @yield('header')

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>

    {{--    <style>--}}
{{--        html,body{--}}
{{--            overflow-x: hidden;--}}
{{--        }--}}

{{--    </style>--}}

        <x-jet-banner />

        <div class="min-h-screen bg-gray-200 dark:bg-gray-800">
{{--            @livewire('navigation-menu')--}}
        <livewire:navigation-menu />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif


        <main class="container mx-auto max-w-custom flex flex-col md:flex-row">
            {{$desktopCard ?? ''}}
            <div class="md:w-175 w-full px-2 md:px-0 mx-auto">
                <div class="mt-8 mx-2">

                    {{ $slot }}
                </div>
            </div>

        </main>
        </div>

            @if (session('success_message'))
                <x-notification-success
                    :redirect="true"
                    message-to-display="{{ (session('success_message')) }}"
                />
            @endif

            @if (session('error_message'))
                <x-notification-success
                    type="error"
                    :redirect="true"
                    message-to-display="{{ (session('error_message')) }}"
                />
            @endif

        @stack('modals')
    <script src="{{asset('/js/theme.js')}}"></script>
    @livewireScripts


    @yield('scripts')

    </body>
</html>
