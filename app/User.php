<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Auth;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'founder', 'paying', 'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }



    public function posts()
    {
        return $this->hasMany('App\Post', 'user_id');
    }

    public function comments()
    {

        return $this->hasMany('App\Comment', 'comment_id');
    }

    public function channels()
    {
        return $this->belongsToMany('App\Channel');
    }

    public function isFollowing ($channel) {
        $channel = Channel::where('slug', '=', $channel)->first();
        $userId = Auth::user()->id;
        $exists = $channel->users->contains($userId);
        return $exists;
    }
}
