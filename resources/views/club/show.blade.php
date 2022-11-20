<x-app-layout>
    @section('title',$club->title)
    @section('image',$club->getProfilePhotoUrlAttribute() )
    @section('description',$club->about)
    <x-slot name="desktopCard">
        <livewire:club-card :club="$club" :actionsCount="$actionsCount"/>
    </x-slot>
    <livewire:club-index :posts="$posts" :club="$club" :actionsCount="$actionsCount"/>
</x-app-layout>
