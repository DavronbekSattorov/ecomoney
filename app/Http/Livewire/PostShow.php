<?php

namespace App\Http\Livewire;

use App\Exceptions\DuplicateVoteException;
use App\Exceptions\VoteNotFoundException;
use App\Http\Livewire\Traits\WithAuthRedirects;
use App\Models\Post;
use App\Models\SpamPosts;
use Livewire\Component;

class PostShow extends Component
{
    use WithAuthRedirects;

    public $post;
//    public $votesCount;
//    public $hasVoted;
    public $hasSaved;
//    public $spamPostsCount;
//    public $hasSpammedPost;

    protected $listeners = [
        'postWasUpdated',
        'postWasMarkedAsSpam',
        'postWasMarkedAsNotSpam',
        'commentWasAdded',
        'commentWasDeleted',
    ];

    public function mount(Post $post,
//                          $votesCount, $spamPostsCount
    )
    {
        $this->post = $post;
//        $this->votesCount = $votesCount;
//        $this->hasVoted = $post->isVotedByUser(auth()->user());
//        $this->spamPostsCount = $spamPostsCount;
        $this->hasSaved = $post->saved_by_user;
//        $this->hasSpammedPost = $post->postWasSpammedByUser(auth()->user());

    }



    public function postWasUpdated()
    {
        $this->post->refresh();
        session()->flash('success_message', 'Post was updated successfully!');
        return $this->redirect(route('post.show', $this->post));


    }

//    public function postWasMarkedAsSpam()
//    {
//        $this->spamPostsCount++;
//        $this->hasSpammedPost = true;
//        $this->post->refresh();
//    }
//
//    public function postWasMarkedAsNotSpam()
//    {
//        $this->spamPostsCount=0;
//        $this->hasSpammedPost = false;
//        $this->post->refresh();
//    }

    public function commentWasAdded()
    {
        $this->post->refresh();
    }

    public function commentWasDeleted()
    {
        $this->post->refresh();
    }

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
//        }
//    }


    public function render()
    {
        return view('livewire.post-show');
    }
}
