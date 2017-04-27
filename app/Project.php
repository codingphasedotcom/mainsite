<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $fillable = [
      'title', 'description', 'type_id', 
  ];

  public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function type()
    {
      return $this->belongsTo('App\ProjectType');
    }

    public function testing()
    {
      return 0;
    }
    public function positions()
    {
        return $this->belongsToMany('App\Position');
    }


}
