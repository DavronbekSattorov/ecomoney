<?php

namespace App\Http\Livewire;

use App\Exceptions\DuplicateSaveException;
use App\Exceptions\DuplicateVoteException;
use App\Exceptions\SaveNotFoundException;
use App\Exceptions\VoteNotFoundException;
use App\Http\Livewire\Traits\WithAuthRedirects;
use App\Models\Post;
use Illuminate\Http\Response;
use Livewire\Component;

class PostFull extends Component
{
    use WithAuthRedirects;

    public $post;
    public $votesCount;
    public $hasVoted;
    public $hasSaved;
    public $hasSpammedPost;
    public $limitHeight;
    public $showMore;

//    public $spamPostsCount;
    protected $listeners = [
        'postWasMarkedAsNotSpam',
    ];
    public function mount(Post $post,
//                          $votesCount
//        ,$spamPostsCount
    )
    {
        $this->post = $post;
//        $this->votesCount = $votesCount;
//        $this->hasVoted = $post->isVotedByUser(auth()->user());
        $this->hasSaved = $post->isSavedByUser(auth()->user());
//        $this->spamPostsCount = $spamPostsCount;
//        $this->hasSpammedPost = $post->postWasSpammedByUser(auth()->user());


    }

//    public function postWasMarkedAsNotSpam()
//    {
//        $this->spamPostsCount=0;
//        $this->hasSpammedPost = false;
//        $this->post->refresh();
//    }

//    public function vote()
//    {
//        if (auth()->guest()) {
//            return $this->redirectToLogin();
//        }
//
//        if ($this->hasVoted) {
//            try {
//                $this->post->removeVote(auth()->user());
//            } catch (VoteNotFoundException $e) {
//                // do nothing
//            }
//            $this->votesCount--;
//            $this->hasVoted = false;
//        } else {
//            try {
//                $this->post->vote(auth()->user());
//            } catch (DuplicateVoteException $e) {
//                // do nothing
//            }
//            $this->votesCount++;
//            $this->hasVoted = true;
//
//        }
//    }

    public function save()
    {
        if (auth()->guest()) {
            return $this->redirectToLogin();
        }

        if ($this->hasSaved) {
            try {
                $this->post->removeSave(auth()->user());
            } catch (SaveNotFoundException $e) {
                // do nothing
            }
            $this->hasSaved = false;
            $this->emit('postIsSavedFromSavedList', 'Product is removed from saved list!');
        } else {
            try {
                $this->post->postSave(auth()->user());
            } catch (DuplicateSaveException $e) {
                // do nothing
            }
            $this->hasSaved = true;
            $this->emit('postIsSaved', 'Product is saved!');
        }
    }

//    public function markAsSpam()
//    {
//        if (auth()->guest()) {
//            abort(Response::HTTP_FORBIDDEN);
//        }
//        $this->post->spamPost(auth()->user());
//        $this->hasSpammedPost = true;
//        $this->post->refresh();
//
//        $this->emit('postWasMarkedAsSpam', 'Post was marked as spam!');
//    }

    public function copied()
    {
        $this->emit('copiedToClipboard', 'Copied to clipboard');
    }


    public function render()
    {
        return view('livewire.post-full');
    }
}
