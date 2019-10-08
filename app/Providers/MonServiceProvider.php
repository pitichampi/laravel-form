<?php

namespace App\Providers;

use App\ViewComposers\FilmsView;
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

        //helpeurs
        $file=app_path('Helpers/MonHelper2.php');
        if(file_exists($file)) {
            require_once($file);
        }
    }



    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('Films/liste', FilmsView::class);
    }
}
