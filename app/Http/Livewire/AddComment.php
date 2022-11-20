<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\WithAuthRedirects;
use App\Models\Comment;
use App\Models\Post;
use App\Notifications\CommentAdded;
use Illuminate\Http\Response;
use Livewire\Component;

class AddComment extends Component
{
    use WithAuthRedirects;
    public $post;
    public $comment;
    protected $rules = [
        'comment' => 'required|min:4',
    ];
    protected $listeners = ['loadCkeCommentCreate' => 'loadCke'];

    public function mount(Post $post)
    {
        $this->post = $post;


    }

    public function addComment()
    {
        if (auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $this->validate();
        $pattern = "/<p[^>]*>[\s|&nbsp;]*<\/p>/";
        $this->comment = preg_replace($pattern, '', $this->comment);
        $find = ['/^((?:&nbsp;|\s)+)|(?1)$/', '/\s*&nbsp;(?:\s*&nbsp;)*\s*/', '/\s+/'];
        $replace = ['', '&nbsp;',' '];
        $this->comment = preg_replace($find, $replace, trim($this->comment));

        $newComment = Comment::create([
            'user_id' => auth()->id(),
            'post_id' => $this->post->id,
            'body' => $this->comment,
        ]);

        $this->reset('comment');

        $this->post->user->notify(new CommentAdded($newComment));


        $this->emit('commentWasAdded', 'Comment was posted!');
    }

    public function loadCke()
    {
        $this->dispatchBrowserEvent('loadCkeCommentCreate', []);
    }



    public function render()
    {
        return view('livewire.add-comment');
    }
}
