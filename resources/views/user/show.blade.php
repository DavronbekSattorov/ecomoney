<x-app-layout>
    @section('title',$user->name)
    @section('image',$user->getProfilePhotoUrlAttribute() )
    @section('description',$user->about)
{{--    <livewire:user-show :user="$user" :actionsCount="$actionsCount"/>--}}
    <x-slot name="desktopCard">
        <livewire:user-card :user="$user" :followCount="$followCount"/>
    </x-slot>
    @if(request()->query('followType'))
        <livewire:follow-index :user="$user" :followCount="$followCount"/>
    @else
        <livewire:user-index :user="$user" :actionsCount="$actionsCount" />
    @endif
        <x-notification-success />
</x-app-layout>
