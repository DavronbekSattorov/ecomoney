<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\WithAuthRedirects;
use App\Models\Post;
use App\Models\SpamPosts;
use App\Models\Save;
use App\Models\User;
use App\Models\Vote;
use Livewire\Component;

class SavesIndex extends Component
{
    use WithAuthRedirects;
    public $filter;
    public $search;
    public $perPage = 10;

    protected $queryString = [
        'filter',
        'search',
    ];

    protected $listeners = ['queryStringUpdatedStatus'];

    public function mount()
    {
    }


    public function updatingFilter()
    {
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedFilter()
    {
        if ($this->filter === 'My Posts') {// change later, my posts
            if (auth()->guest()) {
                return $this->redirectToLogin();
            }
        }
    }

    public function queryStringUpdatedStatus($newStatus)
    {
        $this->resetPage();
        $this->status = $newStatus;
    }
    public function loadMore()
    {
        $this->perPage += 10;
    }

    public function render()
    {

        return view('livewire.saves-index', [
            'posts' => Post::with('user')
                ->rightJoin("saves","posts.id", "=", "saves.post_id")
                ->where('saves.user_id',auth()->id())

                //                ->when($this->filter && $this->filter === 'Top', function ($query) {
//                    return $query->orderByDesc('votes_count');
//                })->when($this->filter && $this->filter === 'SpamPostsController Posts', function ($query) {
//                    return $query->where('spam_reports', '>', 0)->orderByDesc('spam_reports');
//                })->when($this->filter && $this->filter === 'SpamPostsController Comments', function ($query) {
//                    return $query->whereHas('comments', function ($query) {
//                        $query->where('spam_reports', '>', 0);
//                    });
//                })->when(strlen($this->search) >= 3, function ($query) {
//                    return $query->where('title', 'like', '%'.$this->search.'%');
//                })
                ->addSelect(['voted_by_user' => Vote::select('id')
                    ->where('user_id', auth()->id())
                    ->whereColumn('post_id', 'posts.id')
                ])
            ->addSelect(['saved_by_user' => Save::select('id')
                    ->where('user_id', auth()->id())
                    ->whereColumn('post_id', 'posts.id')
//                ])->addSelect(['marked_spam_by_user' => SpamPosts::select('id')
//                    ->where('user_id', auth()->id())
//                    ->whereColumn('post_id', 'posts.id')
                ])
                ->withCount('votes')
//                ->withCount('spam_posts')
                ->withCount('comments')
                ->orderBy('saves.created_at', 'desc')
                ->paginate($this->perPage)
                ->withQueryString(),
        ]);
//        dd($posts);
    }
}
