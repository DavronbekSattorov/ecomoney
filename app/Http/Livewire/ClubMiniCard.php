<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ClubMiniCard extends Component
{
    public  $club;
    public function mount($club)
    {
        $this->club = $club;
    }
    public function render()
    {
        return view('livewire.club-mini-card');
    }
}
