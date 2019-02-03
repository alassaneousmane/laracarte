<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['titre', 'contenu', 'user_id'];

    // On ajoute la relation pour récupérer l'auteur de l'article
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
