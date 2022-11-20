<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class FollowIndex extends Component
{
    use WithPagination;
    public $followType;
    public $user;
    public $perPage = 20;
    public $followCount;


    protected $queryString = ['followType'];


    public function mount(User $user,$followCount)
    {
        $this->user = $user;
        $this->followCount = $followCount;
    }
    public function loadMore()
    {
        $this->perPage += 20;
    }

    public function render()
    {
        return view('livewire.follow-index',[
            'users'=>User::all()
                ->when($this->followType && $this->followType == 'followers',function ($query){
                return $this->user->followers();
            })->when($this->followType && $this->followType == 'followings',function ($query){
                    return $this->user->followings();
            })
                ->paginate($this->perPage)
                ->withQueryString(),
        ]);
    }
}
