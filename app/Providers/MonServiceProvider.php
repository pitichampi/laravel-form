<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
 use App\Classes\Counter; 
class MonServiceProvider extends ServiceProvider
{
    // differe l'execution methodes register
      protected $defer = true;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
         app()->singleton('Counter', function(){

          return new Counter();
        });

         // bind de Cache

         app()->bind('App\Classes\CacheInterface','App\Classes\Cache');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
