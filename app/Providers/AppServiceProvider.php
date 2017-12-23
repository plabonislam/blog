<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
use View;
use App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{


    protected $defer=true;
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    Schema::defaultStringLength(191);


    view::composer('bloglayouts.sidebar',function($view){
        
            $view->with('archive',\App\Post::archive());//1st archive is a variable 
                                                        //App\Post::archive()...indicate give me the archive to that variable
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    $this->app->App::singleton(Stripe::class,function()
{
return new Stripe(config('services.stripe.secret'));

});

    }

}
