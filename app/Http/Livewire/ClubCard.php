<?php

namespace App\Http\Livewire;

use App\Exceptions\DuplicateVoteException;
use App\Exceptions\FollowingNotFoundException;
use App\Http\Livewire\Traits\WithAuthRedirects;
use App\Models\WasteType;
use Livewire\Component;


class ClubCard extends Component
{
    use WithAuthRedirects;
    public $club;
    public $hasFollowed;
    public $actionsCount;
    public function mount(WasteType $club, $actionsCount)
    {
        $this->club = $club;
        $this->hasFollowed = $club->isFollowedByUser(auth()->user());
        $this->actionsCount = $actionsCount;
    }
    public function follow()
    {
        if (auth()->guest()) {
            return $this->redirectToLogin();
        }
        if ($this->hasFollowed) {
            try {
                $this->club->unfollow(auth()->user());
            } catch (FollowingNotFoundException $e) {
                // do nothing
            }
//            $this->votesCount--;
            $this->hasFollowed = false;
        } else {
            try {
                $this->club->follow(auth()->user());
            } catch (DuplicateVoteException $e) {
                // do nothing
            }
//            $this->votesCount++;
            $this->hasFollowed = true;

        }
    }
    public function render()
    {
        return view('livewire.club-card');
    }
}
