<?php

namespace App\Models;

use App\Exceptions\DuplicateFollowException;
use App\Exceptions\DuplicateVoteException;
use App\Exceptions\FollowingNotFoundException;
use App\Exceptions\VoteNotFoundException;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Jetstream\HasProfilePhoto;

class WasteType extends Model
{
    use HasFactory,Sluggable;
    use HasProfilePhoto {
        getProfilePhotoUrlAttribute as getPhotoUrl;
    }
    protected $guarded=[];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    /**
     * Get the URL to the user's profile photo.
     *
     * @return string
     */
    public function getProfilePhotoUrlAttribute()
    {
        if (filter_var($this->profile_photo_path, FILTER_VALIDATE_URL)) {
            return $this->profile_photo_path;
        }

        return $this->getPhotoUrl();
    }

    /**
     * Get the default profile photo URL if no profile photo has been uploaded. //this is copied from hasprofilephoto trait
     *
     * @return string
     */
    protected function defaultProfilePhotoUrl()
    {
        $title = trim(collect(explode(' ', $this->title))->map(function ($segment) {
            return mb_substr($segment, 0, 1);
        })->join(' '));

//        return 'https://ui-avatars.com/api/?name='.urlencode($name).'&color=7F9CF5&background=EBF4FF';
//        return 'https://avatars.dicebear.com/api/adventurer-neutral/'.urlencode($name).'.svg?backgroundColor=%23FFCC99';
        return 'https://avatars.dicebear.com/api/initials/'.urlencode($title).'.svg';
    }

    public function follow(User $user)
    {
        if ($this->isFollowedByUser($user)) {
            throw new DuplicateFollowException();
        }

        WasteTypeSubscriptions::create([
            'waste_type_id' => $this->id,
            'user_id' => $user->id,
        ]);
    }

    public function isFollowedByUser(?User $user)
    {
        if (!$user) {
            return false;
        }

        return WasteTypeSubscriptions::where('user_id', $user->id)
            ->where('waste_type_id', $this->id)
            ->exists();
    }
    public function members()
    {
        return $this->belongsToMany(User::class, 'waste_type_subscriptions', 'waste_type_id', 'user_id');
    }
    public function unfollow(User $user)
    {
        $waste_typeToUnfollow = WasteTypeSubscriptions::where('waste_type_id', $this->id)
            ->where('user_id', $user->id)
            ->first();

        if ($waste_typeToUnfollow) {
            $waste_typeToUnfollow->delete();
        } else {
            throw new FollowingNotFoundException();
        }
    }

}
