<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Http\Response;
use Livewire\Component;

class EditComment extends Component
{
    public Comment $comment;
    public $body;

    protected $rules = [
        'body' => 'required|min:4',
    ];

    protected $listeners = ['setEditComment'
        , 'loadCkeCommentEdit' => 'loadCke'
    ];

    public function setEditComment($commentId)
    {
        $this->comment = Comment::findOrFail($commentId);
        $this->body = $this->comment->body;

        $this->emit('editCommentWasSet');
        $this->dispatchBrowserEvent('loadCkeCommentEdit', []);

    }

    public function updateComment()
    {
        if (auth()->guest() || auth()->user()->cannot('update', $this->comment)) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $this->validate();
        $pattern = "/<p[^>]*>[\s|&nbsp;]*<\/p>/";
        $this->body = preg_replace($pattern, '', $this->body);
        $find = ['/^((?:&nbsp;|\s)+)|(?1)$/', '/\s*&nbsp;(?:\s*&nbsp;)*\s*/', '/\s+/'];
        $replace = ['', '&nbsp;',' '];
        $this->body = preg_replace($find, $replace, trim($this->body));
        $this->comment->body = $this->body;

        $this->comment->save();

        $this->emit('commentWasUpdated', 'Comment was updated!');
    }

    public function loadCke()
    {
        $this->dispatchBrowserEvent('loadCkeCommentEdit', []);
    }

    public function render()
    {
        return view('livewire.edit-comment');
    }
}
