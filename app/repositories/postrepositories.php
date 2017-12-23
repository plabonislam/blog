<?php
namespace App\repositories;
use App\Post;
class postrepositories
{


	public function all()
	{

		//you can select table join table order them as your project require
		return Post::all();
	}
}
