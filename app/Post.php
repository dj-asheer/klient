<?php

namespace App;



class Post extends Model
{
    public function Comments()
    {
    	return $this->hasMany('App\Comment');
    	// Comments::class
    }
}
