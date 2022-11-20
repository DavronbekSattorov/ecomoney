<?php

namespace App\Http\Livewire;

use App\Exceptions\DuplicateVoteException;
use App\Exceptions\FollowingNotFoundException;
use App\Exceptions\VoteNotFoundException;
use App\Models\User;
use Livewire\Component;
use \App\Http\Livewire\Traits\WithAuthRedirects;
use Livewire\WithPagination;


class UserCard extends Component
{
    use WithAuthRedirects,WithPagination;
    public $user;
    public $hasFollowed;
    public $followType;
    public $followCount;

    protected $queryString = [
        'followType',
    ];

    public function mount(User $user, $followCount)
    {
        $this->user = $user;
        $this->hasFollowed = $user->isFollowedByUser(auth()->user());
        $this->followCount = $followCount;

    }

    public function follow()
    {
        if (auth()->guest()) {
            return $this->redirectToLogin();
        }
        if ($this->hasFollowed) {
            try {
                $this->user->unfollow(auth()->user());
            } catch (FollowingNotFoundException $e) {
                // do nothing
            }
//            $this->votesCount--;
            $this->hasFollowed = false;
        } else {
            try {
                $this->user->follow(auth()->user());
            } catch (DuplicateVoteException $e) {
                // do nothing
            }
//            $this->votesCount++;
            $this->hasFollowed = true;

        }
    }
    public function render()
    {
        return view('livewire.user-card');
    }
}
