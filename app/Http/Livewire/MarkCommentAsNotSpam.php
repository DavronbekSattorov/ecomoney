<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MarkCommentAsNotSpam extends Component
{
    public Comment $comment;

    protected $listeners = ['setMarkAsNotSpamComment'];

    public function setMarkAsNotSpamComment($commentId)
    {
        $this->comment = Comment::findOrFail($commentId);

        $this->emit('markAsNotSpamCommentWasSet');
    }

    public function markAsNotSpam()
    {
        if (auth()->guest() || ! auth()->user()->isAdmin()) {
            abort(Response::HTTP_FORBIDDEN);
        }
        DB::table('spam_comments')->where('comment_id',$this->comment->id)->delete();

        $this->emit('commentWasMarkedAsNotSpam', 'Comment spam counter was reset!');
    }

    public function render()
    {
        return view('livewire.mark-comment-as-not-spam');
    }
}
