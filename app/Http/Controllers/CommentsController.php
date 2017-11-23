<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{


	//add a comment to a post


    public function store(Post $post)
    {
    	//validate the post
    	$this->validate(request(),
    		['body'=>'required|min:2'
    	]);
    	//save post here or in post.php 
    	//
    	$post->addComment(request('body'));
    	

    	return back();
    	
    }
}
