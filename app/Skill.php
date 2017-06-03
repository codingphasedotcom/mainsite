<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'title', 'description', 'user_id', 'slug', 'bg_img'
    ];

    public function stacks()
    {
        return $this->belongsToMany('App\Stack');
    }
}
