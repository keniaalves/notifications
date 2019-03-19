<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'body'
    ];
    public function comments()
    {
      return $this->hasMany('App\Model\Comment');
    }

    public function user()
    {
      return $this->belongsTo('App\Model\User', 'user_id');
    }
}
