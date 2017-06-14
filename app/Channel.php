<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
  protected $fillable = [
      'title', 'description', 'approved', 'slug', 'logo', 'submitted_id'
  ];

  public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
