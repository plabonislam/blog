<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;
use App\Http\Requests\RegestrationRequest;

class RegistrationController extends Controller
{
   public function create()
   {
   	return view('registration.create');
   }


   public function store(RegestrationRequest $form)
   {
   	
   
$form->persist();
session()->flash('message','thanks so much for singing up');

//redirect home
return redirect()->home();



   }





}

