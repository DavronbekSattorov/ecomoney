<?php

namespace App\Models;

use App\Exceptions\DuplicateFollowException;
use App\Exceptions\DuplicateVoteException;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use JoelButcher\Socialstream\HasConnectedAccounts;
use JoelButcher\Socialstream\SetsProfilePhotoFromUrl;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto {
        getProfilePhotoUrlAttribute as getPhotoUrl;
    }
    use HasConnectedAccounts;
    use Notifiable;
    use SetsProfilePhotoFromUrl;
    use TwoFactorAuthenticatable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','google_id','github_id','linkedin_id','username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

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
        $name = trim(collect(explode(' ', $this->name))->map(function ($segment) {
            return mb_substr($segment, 0, 1);
        })->join(' '));

//        return 'https://ui-avatars.com/api/?name='.urlencode($name).'&color=7F9CF5&background=EBF4FF';
//        return 'https://avatars.dicebear.com/api/adventurer-neutral/'.urlencode($name).'.svg?backgroundColor=%23FFCC99';
        return 'https://avatars.dicebear.com/api/micah/'.urlencode($name).'.svg?hairProbability=100&hairColor[]=black,canary,coast,topaz&facialHairProbability=0&earringsProbability=0&hair[]=fonze,dannyPhantom,pixie&eyebrows[]=up&mouth[]=smile,laughing,smirk,pucker&baseColor=apricot&scale=120';
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function votes()
    {
        return $this->belongsToMany(Post::class, 'votes');
    }
    public function otherVotes($userId)
    {
         return Post::with('user')->rightJoin("votes","posts.id", "=", "votes.post_id")
            ->where('votes.user_id',$userId)
            ->where("posts.user_id","!=",$userId);
    }
    public function saves()
    {
        return $this->belongsToMany(Post::class, 'saves');
    }
    public function spamPosts()
    {
        return $this->belongsToMany(Post::class, 'spam_posts');
    }
    public function isAdmin()
    {
        return in_array($this->email, [
            'kylym1631@gmail.com'
        ]);
    }
    public function followings()
    {
        return $this->belongsToMany(User::class, 'follower_user', 'follower_id', 'user_id');
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'follower_user', 'user_id', 'follower_id');
    }
    public function isFollowedByUser(? User $user)
    {
        if (!$user) {
            return false;
        }
        return User::find($user->id)
            ->followings()
            ->where('user_id',$this->id)
            ->exists();

    }
    public function follow(User $user)
    {
        if ($this->isFollowedByUser($user)) {
            throw new DuplicateFollowException();
        }
        User::find($user->id)->followings()->attach($this->id);

    }
    public function unfollow(User $user)
    {
        User::find($user->id)->followings()->detach($this->id);
    }


}
