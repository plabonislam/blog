<?php

namespace App;
use App\Comment;


class Post extends Model 
{
    
//$post->comment
	//Comment::class return path App\Comment
    public function comment()
    {
    	return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
    	
    			$this->comment()->create(compact('body'));
    			//$this->comment..retuens all comment associate with trhe post
    			//$this->comment()->create()....here we have given the body through compact it will set body 
    			//and automatically set id as we have relation ship avobe

    }
}
