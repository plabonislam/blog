<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\repositories\postrepositories;
use Carbon\Carbon;

class PostsController extends Controller
{
    


  public function __construct()
  {
    $this->middleware('auth')->except(['bindex','show']);
  }


     public function bindex(postrepositories $posts)
    {
      //$posts=$posts->all();
     // $posts=(new \App\repositories\postrepositories)->all();
      //$posts=$post->all();

     $posts=Post::latest()
     ->filter(request(['month','yr']))
     ->get();

      

    	return view('blogpost.index',compact('posts'));
    }


     public function create()
    {
    	return view('blogpost.create');
    }


    public function store()
    {

//validate post

        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required',

        ]);
        //create and save post through publish method
       auth()->user()->publish(new Post(request(['title','body'])));//pass the new post instance to User.php
       return  redirect('/');
    }

  public function show($id)
  {
    $post=Post::find($id);
    return view ('blogpost.show',compact('post'));
  }

}
