<?php

namespace App\Models;

use App\Exceptions\DuplicateSpamCommentException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $perPage = 20;

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function commentWasSpammedByUser(?User $user)
    {
        if (!$user) {
            return false;
        }

        return SpamComments::where('user_id', $user->id)
            ->where('comment_id', $this->id)
            ->exists();
    }
    public function spamComments(){
        return $this->belongsToMany(User::class, 'spam_comments');
    }
    public function spamComment(User $user)
    {
        if ($this->commentWasSpammedByUser($user)) {
            throw new DuplicateSpamCommentException();
        }

        SpamComments::create([
            'comment_id' => $this->id,
            'user_id' => $user->id,
        ]);
    }

}
