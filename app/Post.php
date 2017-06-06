<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
      'title', 'description', 'slug', 'link_url', 'user_id'
  ];

  public function channel()
  {
      return $this->belongsTo('App\Channel');
  }

  public function postType()
  {
      return $this->belongsTo('App\PostType');
  }

  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
