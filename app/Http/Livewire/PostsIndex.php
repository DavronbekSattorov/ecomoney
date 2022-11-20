<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\WithAuthRedirects;
use App\Models\WasteType;
use App\Models\Post;
use App\Models\SpamPosts;
use App\Models\Save;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    use WithPagination, WithAuthRedirects;

    public $option;
    public $search;
    public $perPage = 10;
    public $searchType;
    public $wasteTypesId;
    public $wasteTypes;
    public $wasteTypesToPost;


    protected $queryString = [
        'option',
        'search',
        'searchType',
        'wasteTypes'
    ];

    protected $listeners = ['queryStringUpdatedStatus'];

    public function mount()
    {

    }


    public function updatingOption()
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

    public function updatedOption()
    {
        if ($this->option === 'sell') {// change later, my posts
            if (auth()->guest()) {
                return $this->redirectToLogin();
            }
        }
    }

    public function queryStringUpdatedStatus($newStatus)
    {
        $this->resetPage();
//        $this->status = $newStatus;
    }

    public function loadMore()
    {
        $this->perPage += 10;
    }

    public function render()
    {

        return view('livewire.posts-index', [
            'users'=> User::when($this->searchType && $this->searchType ==='users', function ($query) {
                if(strlen($this->search) >= 3){
                    return $query
                        ->where('username', 'like', '%' . $this->search . '%')
                        ->orWhere('name', 'like', '%' . $this->search . '%');
                }
            })
//                ->paginate($this->perPage,['id','username','name'])
                ->select('id','username','name','profile_photo_path')
                ->orderBy('name','desc')
            ->get(),
//                ->withQueryString(),
//            'waste_types'=> WasteType::when($this->searchType && $this->searchType ==='wasteTypes', function ($query) {
//                if(strlen($this->search) >= 3){
//                    return $query
//                        ->where('title', 'like', '%' . $this->search . '%')
//                        ->orWhere('slug', 'like', '%' . $this->search . '%');
//                }
//            })
////                ->paginate($this->perPage,['id','username','name'])
//                ->select('id','title','slug','profile_photo_path')
//                ->orderBy('title','desc')
//                ->get(),
            'posts' => Post::with('user')
                ->when($this->option && $this->option === 'buy', function ($query) {
                    return $query->where('option', 'buy')->orderByDesc('created_at');
                })->when($this->option && $this->option === 'sell', function ($query) {
                    return $query->where('option', 'sell')->orderByDesc('created_at');
                })->when($this->wasteTypes, function ($query){
                    if ($this->wasteTypesId !== 'not-selected')
                    {
                        $wasteType = WasteType::where('slug',$this->wasteTypesId)->first();
                        if ($wasteType)
                        {
                            return $query
                                ->where('username', 'like', '%' . $this->search . '%');
                        }
                    }
                })
//->when($this->filter && $this->filter === 'My Posts', function ($query) {
//                    return $query->where('user_id', auth()->id());
////                })->when($this->filter && $this->filter === 'Spam Posts', function ($query) {
//                })->when(!$this->searchType || $this->searchType ==='posts', function ($query) {
//                    if(strlen($this->search) >= 3){
//                        return $query
//                            ->where('title', 'like', '%' . $this->search . '%')
//                            ->orWhere('description', 'like', '%' . $this->search . '%');
//                    }
//                })
//                ->addSelect(['voted_by_user' => Vote::select('id')
//                    ->where('user_id', auth()->id())
//                    ->whereColumn('post_id', 'posts.id')
//                ])
                ->addSelect(['saved_by_user' => Save::select('id')
                    ->where('user_id', auth()->id())
                    ->whereColumn('post_id', 'posts.id')
                ])->addSelect(['marked_spam_by_user' => SpamPosts::select('id')
                    ->where('user_id', auth()->id())
                    ->whereColumn('post_id', 'posts.id')
                ])
//                ->withCount('votes')
//                ->withCount('spam_posts')
                ->withCount('comments')
                ->orderBy('id', 'desc')
//                ->simplePaginate()
                    ->paginate($this->perPage)
                ->withQueryString(),
//            'waste_types'=> WasteType::select('id','title','slug',)
////                ->paginate($this->perPage,['id','username','name'])
////                ->select('id','title','slug',)
//                ->orderBy('title','asc')
//                ->get(),
            'rec_waste_types'=>WasteType::select('id','title','slug','profile_photo_path')
                ->withCount('members')
                ->orderByDesc('members_count')
//                ->limit(7)
                ->get(),

        ]);
    }
}
