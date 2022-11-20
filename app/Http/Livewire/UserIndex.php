<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\WithAuthRedirects;
use App\Models\Post;
use App\Models\SpamPosts;
use App\Models\Save;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class UserIndex extends Component
{
    use WithPagination, WithAuthRedirects;

    public $filter;
    public $perPage = 10;
    public $username;
    public $userId;
    public $actionsCount;

    protected $queryString = [
        'filter',
    ];


    public function mount(User $user,$actionsCount)
    {
        $this->userId = $user->id;
        $this->username = $user->username;
        $this->actionsCount = $actionsCount;
    }




//    public function updatingFilter()
//    {
//        $this->resetPage();
//    }



    public function loadMore()
    {
        $this->perPage += 10;
    }

    public function render()
    {

        return view('livewire.user-index', [
            'posts' => Post::with('user')
//                ->when($this->filter && $this->filter === 'upvotes', function ($query) {
//                    return $query->rightJoin("votes","posts.id", "=", "votes.post_id")
//                        ->where('votes.user_id',$this->userId)
//                        ->where("posts.user_id","!=",$this->userId)
//                        ->orderByDesc('votes.created_at', 'desc');
//                }
//                )
            ->when(!$this->filter || $this->filter === 'posts', function ($query) {
                    return $query->where('user_id', $this->userId);
//                })->when($this->filter && $this->filter === 'Spam Posts', function ($query) {
//                })->when(strlen($this->search) >= 3, function ($query) {
//                    return $query->where('title', 'like', '%'.$this->search.'%')
//                        ->orWhere('description', 'like', '%'.$this->search.'%');

                })->when($this->filter && $this->filter === 'comments', function ($query) {
                    return $query->rightJoin("comments","posts.id", "=", "comments.post_id")
                        ->where('comments.user_id',$this->userId)
//                        ->where("posts.user_id","!=",$this->userId)
                        ->orderByDesc('comments.created_at', 'desc');
                })
                    ->addSelect(['voted_by_user' => Vote::select('id')
                    ->where('user_id', auth()->id())
                    ->whereColumn('post_id', 'posts.id')
                ])->addSelect(['saved_by_user' => Save::select('id')
                    ->where('user_id', auth()->id())
                    ->whereColumn('post_id', 'posts.id')
                ])->addSelect(['marked_spam_by_user' => SpamPosts::select('id')
                    ->where('user_id', auth()->id())
                    ->whereColumn('post_id', 'posts.id')
                ])
//                ->withCount('votes')
                ->withCount('comments')
                ->orderBy('id', 'desc')
                ->paginate($this->perPage)
                ->withQueryString(),
        ]);
    }
}
