<?php

namespace App;
use App\Comment;
use Carbon\Carbon;

class Post extends Model 
{
    
//$post->comment
	//Comment::class return path App\Comment
    public function comment()
    {
    	return $this->hasMany(Comment::class);
    }

     public function user()
    {
    	return $this->belongsTo(User::class);
    }
    //$post->user//give me the user who wrote the post
    //$comment->post->user//give the user who wrote particular comment that post

    public function addComment($body)
    {
    	
    		Comment::create(
                [
                'body'=>$body,
                'post_id'=>$this->id,
                'user_id'=>$this->id
                ]
            );
    			//$this->comment..retuens all comment associate with trhe post
    			//$this->comment()->create()....here we have given the body through compact it will set body 
    			//and automatically set id as we have relation ship avobe

    }



    public function scopeFilter($query,$filters)
    {


      if($month= $filters['month'])
      {
        $query->whereMonth('created_at',Carbon::parse($month)->month);//wheremonth expected month as 5.3..that mean in number so we have to parse month
      }

       if($year= $filters['yr'])
      {
        $query->whereYear('created_at',$year);
      }


    }
    public static function archive()
    {
return static::selectRaw('year(created_at)yr,monthname(created_at)month,count(*)publish')
         ->groupBy('yr','month')
         ->orderByRaw('min(created_at)')
         ->get()
         ->toArray();

    }

    
}
