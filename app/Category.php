<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function categories()
  {
      return $this->belongsToMany('App\Projects');
  }
  public function projects()
  {
      return $this->hasMany('App\Project');
  }
}
