<?php

namespace App\Models;

use App\Exceptions\DuplicateSaveException;
use App\Exceptions\DuplicateSpamPostException;
use App\Exceptions\DuplicateVoteException;
use App\Exceptions\SaveNotFoundException;
use App\Exceptions\VoteNotFoundException;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;


class Post extends Model
{
    use HasFactory,Sluggable;


    protected $guarded = [];
//    protected $perPage = 10;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }



    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


//    public function votes()
//    {
//        return $this->belongsToMany(User::class, 'votes');
//    }

    public function saves()
    {
        return $this->belongsToMany(User::class, 'saves');
    }
//    public function spamPosts()
//    {
//        return $this->belongsToMany(User::class, 'spam_posts');
//    }


//    public function isVotedByUser(?User $user)
//    {
//        if (!$user) {
//            return false;
//        }
//
//        return Vote::where('user_id', $user->id)
//            ->where('post_id', $this->id)
//            ->exists();
//    }

    public function isSavedByUser(?User $user)
    {
        if (!$user) {
            return false;
        }

        return Save::where('user_id', $user->id)
            ->where('post_id', $this->id)
            ->exists();
    }

//    public function postWasSpammedByUser(?User $user)
//    {
//        if (!$user) {
//            return false;
//        }
//
//        return SpamPosts::where('user_id', $user->id)
//            ->where('post_id', $this->id)
//            ->exists();
//    }


    public function vote(User $user)
    {
        if ($this->isVotedByUser($user)) {
            throw new DuplicateVoteException;
        }

        Vote::create([
            'post_id' => $this->id,
            'user_id' => $user->id,
        ]);
    }

//    public function spamPost(User $user)
//    {
//        if ($this->postWasSpammedByUser($user)) {
//            throw new DuplicateSpamPostException();
//        }
//
//        SpamPosts::create([
//            'post_id' => $this->id,
//            'user_id' => $user->id,
//        ]);
//    }

    public function postSave(User $user)
    {
        if ($this->isSavedByUser($user)) {
            throw new DuplicateSaveException();
        }

        Save::create([
            'post_id' => $this->id,
            'user_id' => $user->id,
        ]);
    }

//    public function removeVote(User $user)
//    {
//        $voteToDelete = Vote::where('post_id', $this->id)
//            ->where('user_id', $user->id)
//            ->first();
//
//        if ($voteToDelete) {
//            $voteToDelete->delete();
//        } else {
//            throw new VoteNotFoundException;
//        }
//    }
    public function removeSave(User $user)
    {
        $saveToDelete = Save::where('post_id', $this->id)
            ->where('user_id', $user->id)
            ->first();

        if ($saveToDelete) {
            $saveToDelete->delete();
        } else {
            throw new SaveNotFoundException();
        }
    }

    public function wasteTypes()
    {
       return $this->belongsToMany(WasteType::class,'waste_type_post');
    }


}
