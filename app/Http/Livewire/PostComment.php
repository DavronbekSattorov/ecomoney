<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class PostComment extends Component
{
    public $comment;
    public $postUserId;
    public $spamCommentsCount;
    public $hasSpammedComment;
    public $simpleComment;
//    public $simpleComment;
    protected $listeners = [
        'commentWasUpdated',
        'commentWasMarkedAsSpam',
        'commentWasMarkedAsNotSpam',
    ];


    public function commentWasUpdated()
    {
        $this->comment->refresh();
    }

    public function commentWasMarkedAsSpam()
    {
//        $this->hasSpammedComment = true;
        $this->comment->refresh();
    }

    public function commentWasMarkedAsNotSpam()
    {
//        $this->hasSpammedComment = false;
        $this->comment->refresh();
    }

    public function mount(Comment $comment, $postUserId)
    {
        $this->comment = $comment;
        $this->postUserId = $postUserId;
        $this->spamCommentsCount = $comment->spamComments()->count();
        $this->hasSpammedComment = $comment->commentWasSpammedByUser(auth()->user());
    }

    public function render()
    {
        return view('livewire.post-comment');
    }
}
