<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function channel()
  {
      return $this->belongsTo('App\Channel');
  }

  public function post_type()
  {
      return $this->belongsTo('App\PostType');
  }
}
