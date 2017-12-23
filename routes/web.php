<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




//$stripe=resolve('App\Billing\Stripe');





Route::get('/','PostsController@bindex')->name('home');

Route::get('bposts/create','PostsController@create');
Route::post('bposts','PostsController@store');

Route::get('/posts/{post}','PostsController@show');

Route::Post('/posts/{post}/comment','CommentsController@store');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');


Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');



Route::get('/logout','SessionsController@destroy');


