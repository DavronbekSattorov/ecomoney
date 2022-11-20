<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;


class PostComments extends Component
{
    use WithPagination;
    public $post;
    public $simpleComment;
    protected $listeners = ['commentWasAdded', 'commentWasDeleted'];
    protected $paginationTheme = 'tailwind';
    public function commentWasAdded()
    {
        $this->post->refresh();
        $this->goToPage($this->post->comments()
            ->paginate()->lastPage()
        );
    }


    public function commentWasDeleted()
    {
        $this->post->refresh();
        $this->goToPage(1);

    }

    public function mount(Post $post)
    {
        $this->post = $post;
    }




    public function render()
    {
        return view('livewire.post-comments', [
            'comments' => Comment::with(['user'])->where('post_id', $this->post->id)
//                ->where('comments.user_id',auth()->id())
                ->paginate()
//                ->paginate($this->perPage)
                ->withQueryString(),
        ]);
    }
}
