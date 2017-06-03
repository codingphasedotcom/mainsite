<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stack extends Model
{
    protected $fillable = [
        'title', 'description', 'user_id', 'slug', 'bg_img'
    ];


    public function users()
      {
          return $this->belongsToMany('App\User');
      }

    public function skills()
     {
         return $this->belongsToMany('App\Skill');
     }

}
