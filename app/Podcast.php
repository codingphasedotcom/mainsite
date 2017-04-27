<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    protected $fillable = [
        'title', 'description', 'user_id', 'youtube_id',
    ];
}
