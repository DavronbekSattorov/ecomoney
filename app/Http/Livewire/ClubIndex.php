<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\WithAuthRedirects;
use App\Models\WasteType;
use App\Models\WasteTypeSubscriptions;
use App\Models\Post;
use App\Models\Save;
use App\Models\SpamPosts;
use App\Models\User;
use App\Models\Vote;
use Livewire\Component;
use Livewire\WithPagination;

class ClubIndex extends Component
{
    use WithPagination, WithAuthRedirects;

    public $filter;
    public $search;
    public $perPage = 10;
    public $searchType;
//    public $followType;
//    public $posts;
    public $postIds=[];
    public $club;
    public $actionsCount;


    protected $queryString = [
        'filter',
        'search',
        'searchType',
//        'followType'
    ];

    protected $listeners = ['queryStringUpdatedStatus'];

    public function mount($posts, WasteType $club, $actionsCount)
    {
//        $this->posts = $posts;
        foreach ($posts as $post) {
            $this->postIds[] = $post['id'];
        }
        $this->club = $club;
        $this->actionsCount = $actionsCount;
    }


    public function updatingFilter()
    {
        $this->resetPage();
    }

//    public function updatingSearchType()
//    {
//        $this->resetPage();
//    }

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

//    public function queryStringUpdatedStatus($newStatus)
//    {
//        $this->resetPage();
////        $this->status = $newStatus;
//    }

    public function loadMore()
    {
        $this->perPage += 10;
    }

    public function render()
    {
        return view('livewire.club-index', [
            'posts' => Post::with('user')
                ->when($this->filter && $this->filter === 'Top Voted', function ($query) {
                    return $query->orderByDesc('votes_count');
//                })->when($this->filter && $this->filter === 'My Posts', function ($query) {
//                    return $query->where('user_id', auth()->id());
//                })->when($this->filter && $this->filter === 'Spam Posts', function ($query) {
                })->when(!$this->searchType || $this->searchType ==='posts', function ($query) {
                    if(strlen($this->search) >= 3){
                        return $query
                            ->whereIn('posts.id',$this->postIds)
                            ->where('title', 'like', '%' . $this->search . '%')
                            ->orWhere('description', 'like', '%' . $this->search . '%');
                    }
                })->whereIn('id',$this->postIds)
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
                ->withCount('votes')
                ->withCount('comments')
                ->orderBy('id', 'desc')
                ->paginate($this->perPage)
                ->withQueryString(),
            'users'=> User::when($this->searchType && $this->searchType ==='members', function ($query) {
                    return $this->club->members();
            })
                ->paginate($this->perPage + 10)
                ->withQueryString(),

        ]);
    }
}
