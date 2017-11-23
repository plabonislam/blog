<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    


   /* public function show()
    {
    	return view('posts.show');//ager
    }*/


     public function bindex()
    {
        $posts=Post::latest()->get();
    	return view('blogpost.index',compact('posts'));
    }


     public function create()
    {
    	return view('blogpost.create');
    }


    public function store()
    {



       /* $this->validate(request(),[
            'title'=>'required',
            'body'=>'required',

        ]);*/
        Post::create(request(['title','body']));
       return  redirect('/');
    }

  public function show($id)
  {
    $post=Post::find($id);
    return view ('blogpost.show',compact('post'));
  }

}
