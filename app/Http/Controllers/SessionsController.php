<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionsController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest',['except'=>'destroy']);
	}
	
    public function create()
    {
return view('sessions.create');
    }




    public function store()
    {
	
	if(! Auth::attempt(request(['email','password'])))
    {
 return back()->withErrors([ 'message'=>'check man']);
    } 
    
        return redirect()->home();
    
    }
 




    public function destroy()
    {
    	auth()->logout();
    	return redirect()->home();
    }
}
