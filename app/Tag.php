<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tag', 'tag_url'];

    /*
    * posts, permettra de récupérer tous les posts liés à ce tag
    */
    public function posts()
    {
    	return $this->belongsToMany('App\Post');
    }
}
